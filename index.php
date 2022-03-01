<?php
$admin = FALSE;
include("./includes/functions.php");
include("./includes/header.php");
if(isset($_SESSION['email'])){
<<<<<<< HEAD
    header("Location:http://localhost/pruebaPHP
/admin/panel.php?id=".$_SESSION['id']."");
=======
    header("Location:http://localhost/pruebaPHP/admin/panel.php?id=".$_SESSION['id']."");
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
}
$con = conectar();
$sql = "SELECT blogs.id,titulo,fecha,nombre,apellido,imagen FROM blogs INNER JOIN docentes;";
$query = mysqli_query($con,$sql);
include("./includes/blogs.php");
include("./includes/footer.php");
<<<<<<< HEAD
?>


=======
?>
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
