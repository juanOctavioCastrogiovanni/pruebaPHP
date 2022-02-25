<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "blogup";

        $conn = mysqli_connect($host,$user,$pass);
        mysqli_select_db($conn,$db);

        return $conn;
    }
    function ordenarFecha($fechaOriginal){
        //cambia el formato del objeto date           
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $d = $fechaOriginal;
    return $fecha = strftime("%d de %B de %Y");
    }
    function iniciarSesion($email,$contrasenia){
		$con = conectar();
        $sql = "SELECT id, nombre, apellido, email, pass FROM docentes;";
        $query = mysqli_query($con,$sql);
		
		if($listaUsuarios = mysqli_fetch_array($query,MYSQLI_ASSOC)){
			while($listaUsuarios){
				if($listaUsuarios['email'] == $email){
					if (password_verify($contrasenia,$listaUsuarios['pass'])){
                        crearSesion($listaUsuarios['id'],$listaUsuarios['nombre'],$listaUsuarios['apellido'],$listaUsuarios['email'],$listaUsuarios['pass']);
						return TRUE;
					} 
				} 
			}
		} else {
            echo "<h1>Error en la consulta en la base de datos</h1>";
        }
        return FALSE;
	}
    function crearSesion($id,$nombre,$apellido,$email,$pass){
		session_start();
        $_SESSION['id'] = $id; 
        $_SESSION['nombre'] = $nombre; 
        $_SESSION['apellido'] = $apellido; 
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
		
	}
  
    if(isset($_GET['action'])){
        session_start();
        session_unset();
        session_destroy();
        header("location: ../");
    }

?>