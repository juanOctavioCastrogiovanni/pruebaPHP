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

        if (!$conn) {
            die("Conexion fallida: " . mysqli_connect_error());
          }

        return $conn;
    }
    function ordenarFecha($fechaOriginal){
        //cambia el formato del objeto date           
    $fecha = new DateTime($fechaOriginal);
    return $fecha->format('d/m/Y');;
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
					} else {
                        return FALSE;
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
    function mostrarMensaje($cod){
		switch ($cod) {
			case '0x001':
				$mensaje = "Sus credecinales son incorrectas, vuelva a ingresar sus credenciales.";
			break;
            case '0x002':
				$mensaje = "El e-mail ingresado no es válido.";
			break;
            case '0x003':
				$mensaje = "El campo email o contraseña estan vacios.";
			break;
            case '0x004':
				$mensaje = "Ha iniciado sesion correctamente.";
			break;
            case '0x005':
				$mensaje = "Se ha creado el blog con exito.";
			break;
            case '0x006':
				$mensaje = "Error al crear blog, por favor intentalo nuevamente.";
			break;
            case '0x007':
				$mensaje = "El blog ha sido eliminado.";
			break;
            case '0x008':
				$mensaje = "El blog no ha podido ser eliminado.";
			break;
            
        }
		return "<p class='text-center rta-".$cod."'>".$mensaje."</p>";
	}
    // function insert2($columnas,$valores,$tabla){
    //     $con = conectar();
    //     $sql = "INSERT INTO $tabla ($columnas) VALUES ('$valores');";
    //     echo "<pre>";
    //                     var_dump($sql);
    //                     echo "</pre>";
    //                     die();
    //     if($query = mysqli_query($con,$sql)){
    //         return mysqli_insert_id($con); 
    //     } 
    //     return 0;
    // }
    function insert($columnas,$valores,$tabla){
        $con = conectar();
        $sql = "INSERT INTO $tabla ($columnas) VALUES ('$valores');";
        if($query = mysqli_query($con,$sql)){
            return mysqli_insert_id($con); 
        } 
        return 0;
    }

    function delete($id,$tabla){
        $con = conectar();
        $sql = "DELETE FROM $tabla WHERE id=$id;";
        if($query = mysqli_query($con,$sql)){
            return 1;
        }
        return 0;
    }

    function procesarDocumentos($archivos){
        //recorro todos los nombres temporales
        $nombres = array();
        $total = count($archivos['archivo']['name']);
        for($i=0;$i<$total;$i++){
            //Si el archivo existe
            if($archivos['archivo']['name'][$i]){
                $nombreArchivo= $archivos['archivo']['name'][$i];
                $temporal= $archivos['archivo']['tmp_name'][$i];
                //Si no existe el directorio lo creo con permisos especiales
                if(!file_exists("../upload/archivos")){
                    mkdir("../upload/archivos",0777);
                }
                $dir = opendir("../upload/archivos");
                $ruta = "../upload/archivos"."/".$nombreArchivo;
                if(file_exists($ruta)){
                    array_push($nombres,$nombreArchivo);
                    
                } else {
                //paso el documento al directorio definitivo
                    if(move_uploaded_file($temporal,$ruta)){
                        array_push($nombres,$nombreArchivo);
                    } else {
                        echo "error al procesar archivo";
                        die();
                    }
            }
                closedir($dir);
            }
        }
           return $nombres;
    }
    if(isset($_GET['action'])){
        session_start();
        session_unset();
        session_destroy();
        header("location: ../");
    }




?>