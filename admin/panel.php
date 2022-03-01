<?php
$admin = TRUE;
include("../includes/header.php");
include("../includes/functions.php");
<<<<<<< HEAD
//si no estoy en sesion, forzar a salir de las rutas de admin
if(!isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP
/");
} 
//si inicie session puedo mostrarlo
if(isset($_GET['rta'])){
    echo mostrarMensaje($_GET['rta']);
}
//si existe un id parametrizado, traelo y mostra todos sus blogs
if(isset($_GET['id'])){ 
        $con = conectar();
        $sql = "SELECT blogs.id,titulo,fecha,nombre,apellido,imagen FROM blogs INNER JOIN docentes ON docentes.id=".$_GET['id']."";
        $query = mysqli_query($con,$sql);
        include("../includes/blogs.php");
   } else {
       echo "<h1>Error de conexion</h1>";
   }

=======
if(!isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP/");
}

   if(isset($_GET['id'])){ 
        $con = conectar();
        $sql = "SELECT blogs.id,titulo,fecha,nombre,apellido,imagen FROM blogs INNER JOIN docentes ON docentes.id=".$_GET['id']."";
        $query = mysqli_query($con,$sql);
        include("../includes/blogs.php");
   } else {
       echo "<h1>Error de conexion</h1>";
   }

>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
include("../includes/footer.php");
    ?>