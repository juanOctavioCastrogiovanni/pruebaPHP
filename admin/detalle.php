<?php
$admin =TRUE;
include("../includes/functions.php");
include("../includes/header.php");
if(isset($_GET['id'])&&isset($_SESSION['email'])){
    $con = conectar();
    //consulta informacion de blog detalle
    $sql = "SELECT blogs.id AS id_blog,titulo,cuerpo,fecha,docentes.nombre,apellido,imagen FROM blogs INNER JOIN docentes ON blogs.id=".$_GET['id']."";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);
    $fecha = ordenarFecha($row['fecha']);
    //consulta informacion de los archivos adjuntos en el blog
    $sql2= "SELECT archivos.nombre FROM blogs INNER JOIN docentes INNER JOIN archivos ON blogs.id=".$_GET['id']."";
    $query2 = mysqli_query($con,$sql2);  
    include("../includes/detalle-blog.php");
} else {
    echo "<h1>El no esta registrado</h1>";
}
include("../includes/footer.php");
?>