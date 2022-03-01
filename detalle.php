<?php
$admin = FALSE;
include("./includes/functions.php");
include("./includes/header.php");
if(isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP/admin/detalle.php?id=".$_SESSION['id']."");
}
if(isset($_GET['id'])){
    $con = conectar();
    //consulta informacion de blog detalle
    $sql = "SELECT blogs.id AS id_blog,titulo,cuerpo,fecha,docentes.nombre,apellido,imagen, catedras.nombre AS nombreCatedra FROM blogs INNER JOIN docentes INNER JOIN catedras ON blogs.id=".$_GET['id']."";
    if($query = mysqli_query($con,$sql)){
        $row = mysqli_fetch_assoc($query);
        $fecha = ordenarFecha($row['fecha']);
    } else {
        echo "<h1>Error de consulta</h1>";
    }
       //consulta informacion de los archivos adjuntos en el blog
    $sql2= "SELECT archivos.nombre FROM blogs INNER JOIN docentes INNER JOIN archivos ON blogs.id=".$_GET['id']."";
    if(!$query2 = mysqli_query($con,$sql2)){
        echo "<h1>Error de consulta</h1>";
    }
} else {
    header("Location: http://localhost/pruebaPHP");
}
include("./includes/detalle-blog.php");
include("./includes/footer.php");
?>