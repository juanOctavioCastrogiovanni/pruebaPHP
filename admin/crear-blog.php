<?php  
    include('../includes/functions.php');
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       
        $array = array();
        //filtro lo que viene del formulario (evitando inyeccion), solo necesito titulo y cuerpo.
        foreach ($_POST as $key => $valor){
            if($key==='titulo' || $key==='cuerpo'){
                $array[$key]=htmlentities($valor);
            }
        }
        //agrego el id docente que esta en sesion, ya que el mismo esta creando el blog.
        $array['id_docentes']=(int)$_SESSION['id'];
        //separo en arreglo distintos tanto las claves como los valores para poder realizar la consulta
        $columnas = implode(',',array_keys($array));        
        $valores = implode("','",array_values($array));
        
        //ejecuto insert, si se crea correctamente procedo a insertar las imagenes.
      if($id = insert($columnas,$valores)){
        //Si hay archivos que procesar, los guardara en el directorio y devolvera un arreglo con sus nombres
        if($nombres = procesarDocumentos($_FILES)){
            //por cada nombre de archivo que haya procesado hara un insert en la tabla de archivos.
                foreach($nombres as $nombre){
                    $columnas = "nombre,id_blogs";        
                    $valores = "'$nombre','$id'";        ;
                    insert($columnas,$valores);
                }
                header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x005");
            } else {    
                header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x006");
            }

    } else {        
        header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x006");
    }
}
?>

