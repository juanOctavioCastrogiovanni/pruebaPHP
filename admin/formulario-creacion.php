<?php
$admin = TRUE;
$action = "./editar-blog.php";
include("../includes/header.php");
if(!isset($_SESSION['email'])){
<<<<<<< HEAD
    header("Location:http://localhost/pruebaPHP
/panel.php");
=======
    header("Location:http://localhost/pruebaPHP/panel.php");
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff
}
?>
<div class="principal size">
    <div class="container">  
    <?php include("../includes/formulario.php");?>
    </div>
</div>

<?php
    include("../includes/footer.php");
    ?>