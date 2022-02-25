<?php
$admin = TRUE;
include("../includes/header.php");
include("../includes/functions.php");
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

include("../includes/footer.php");
    ?>