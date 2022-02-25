<?php 
    include "../includes/functions.php";
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])){
            if(iniciarSesion($_POST['email'],$_POST['pass'])){
                header("location: ./panel.php?id=".$_SESSION['id']."");
            } else {
                header("location: ../formulario-login.php");
            }
    }
    

?>