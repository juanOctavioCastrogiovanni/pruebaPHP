<?php
$admin = TRUE;
include("../includes/header.php");
include("../includes/functions.php");
//si no estoy en sesion, forzar a salir de las rutas de admin
if(!isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP/");
} 
//si inicie session puedo mostrarlo
if(isset($_GET['rta'])){
    echo mostrarMensaje($_GET['rta']);
}
//si existe un id parametrizado, traelo y mostra todos sus blogs
if(isset($_GET['id'])){ 
        $con = conectar();
        $sql = "SELECT blogs.id,titulo,fecha,docentes.nombre AS nombre,apellido,imagen, catedras.nombre AS nombreCatedra FROM blogs INNER JOIN catedras INNER JOIN docentes ON docentes.id=".$_GET['id']." AND catedras.id_docentes=blogs.id_docentes AND docentes.id=blogs.id_docentes";
        $query = mysqli_query($con,$sql);
        include("../includes/blogs.php");
   } else {
       echo "<h1>Error de conexion</h1>";
   }

include("../includes/footer.php");
    ?>