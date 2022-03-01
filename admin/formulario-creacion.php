<?php
$admin = TRUE;
$action = "./editar-blog.php";
include("../includes/header.php");
if(!isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP
/panel.php");
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