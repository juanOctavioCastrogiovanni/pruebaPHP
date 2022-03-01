<?php 
    include "../includes/functions.php";
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])){
        //si ambos campos no se encuentran vacios
        if($_POST['email']!="" && $_POST['pass']!=""){
            if(iniciarSesion($_POST['email'],$_POST['pass'])){
                header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x004");
            } else {
                header("location: ../formulario-login.php?rta=0x001");
            }
        } else {
            //si alguno se encuentra vacio y ese es el del mail se hara una validacion para ver si es mail
            if($_POST['email'] == ""||filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false){
                header("location: ../formulario-login.php?rta=0x002");
            }

            if($_POST['pass'] == ""){
                header("location: ../formulario-login.php?rta=0x003");
            }
        }
    }
    

?>