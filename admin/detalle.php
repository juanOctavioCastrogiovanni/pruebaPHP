<?php
$admin =TRUE;
include("../includes/functions.php");
include("../includes/header.php");
if(isset($_GET['id'])&&isset($_SESSION['email'])){
    $con = conectar();
    //consulta informacion de blog detalle
    $sql = "SELECT blogs.id AS id_blog,titulo,cuerpo,fecha,docentes.nombre,apellido,imagen, catedras.nombre AS nombreCatedra FROM blogs INNER JOIN docentes INNER JOIN catedras ON blogs.id=".$_GET['id']." AND docentes.id=blogs.id_docentes AND catedras.id_docentes=blogs.id_docentes";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);
    $fecha = ordenarFecha($row['fecha']);
    //consulta informacion de los archivos adjuntos en el blog
    $sql2= "SELECT nombre FROM archivos WHERE id_blogs=".$_GET['id']."";
    $query2 = mysqli_query($con,$sql2);  
    include("../includes/detalle-blog.php");
} else {
    echo "<h1>El no esta registrado</h1>";
}
include("../includes/footer.php");
?>