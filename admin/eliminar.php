<?php
include("../includes/functions.php");
if(isset($_GET['id'])){
    //Primero debo asegurarme de borrar los archivos ya que si elimino primero el blog, va a haber un error debido a que se encuentra una clave foranea en ellos.
    $con = conectar();
    $sql = "SELECT * FROM archivos WHERE id_blogs=".$_GET['id'].";";
    $query = mysqli_query($con,$sql);
    $flag=TRUE;
    
    if($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            //Elimino todos los archivos relacionados con ese blog y cambio el estado de flag si algun archivo no pudo borrarlo.
            echo $row['id'];
            if(!delete($_GET['id'],'archivos','id_blogs')){
                $flag = FALSE;
            }
        }
        
        //Si cambio el estado significa que ya se borraron todos los archivos y puede proseguir a borrar el blog.
        if($flag){
            if(delete($_GET['id'],'blogs','id')){
                header("location: ./eliminar.php?rta=0x007");
            } else {
                header("location: ./eliminar.php?rta=0x008");
            }
        } else {
            header("location: ./eliminar.php&rta=0x008");
        }
}
if(isset($_GET['rta'])){
    //En el caso que lo haya borrado o no, muestro el mensaje por pantalla.
    $admin = TRUE;
    include("../includes/header.php");
    $mensaje = "Se ha borrado los datos correctamente";
    $rta = "0x007";
    if($_GET['rta']==="0x007"){
        include("../includes/confirmacion.php");
    } 
    if($_GET['rta']==="0x008"){
        $rta="0x008";
        $mensaje = "error";
        include("../includes/confirmacion.php");
    }
    include("../includes/footer.php");
}


?>