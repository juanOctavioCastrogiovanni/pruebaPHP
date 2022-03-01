<?php
$admin = FALSE;
include("./includes/functions.php");
include("./includes/header.php");
if(isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP/admin/panel.php?id=".$_SESSION['id']."");
}
$con = conectar();
$sql = "SELECT blogs.id,titulo,fecha,docentes.nombre AS nombre,apellido,imagen, catedras.nombre AS nombreCatedra FROM blogs INNER JOIN catedras INNER JOIN docentes";
$query = mysqli_query($con,$sql);
include("./includes/blogs.php");
include("./includes/footer.php");
?>


