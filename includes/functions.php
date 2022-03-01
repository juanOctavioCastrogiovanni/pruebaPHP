<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "blogup";

        // $host = "localhost";
        // $user = "usuarionuevo_UP";
        // $pass = "UxD7bmOfdr,a";
        // $db = "usuarionuevo_up";

        // http://usuarionuevo.7kb.net/pruebaUP

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
<<<<<<< HEAD
					} else {
                        return FALSE;
                    } 
=======
					} 
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
				} 
			}
		} else {
            echo "<h1>Error en la consulta en la base de datos</h1>";
        }
<<<<<<< HEAD
        
=======
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
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
<<<<<<< HEAD
    function mostrarMensaje($cod){
		switch ($cod) {
			case '0x001':
				$mensaje = "Sus credecinales son incorrectas, vuelva a ingresar sus credenciales.";
			break;
            case '0x002':
				$mensaje = "El e-mail ingresado no es válido.";
			break;
            case '0x003':
				$mensaje = "La contraseña no puede estar vacia.";
			break;
            case '0x004':
				$mensaje = "Ha iniciado sesion correctamente.";
			break;
        }
		return "<p class='text-center rta-".$cod."'>".$mensaje."</p>";
	}
=======
  
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
    if(isset($_GET['action'])){
        session_start();
        session_unset();
        session_destroy();
        header("location: ../");
    }
<<<<<<< HEAD



=======
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff

?>