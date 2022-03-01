<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    if($admin){
    echo "<link rel='stylesheet' href='../css/styles.css'>";
    } else {
    echo "<link rel='stylesheet' href='./css/styles.css'>";
    }
?>
    <title>Document</title>
</head>
<body>
    <div class=navbar>
        <div class="caja1">
    <?php
    if($admin){
       echo "<a href='../index.php'><img class='logo' src='../recursos/logo.png'></a>";
    } else {
        echo "<a href='./index.php'><img class='logo' src='./recursos/logo.png'></a>";
    }

    ?>
        </div>
    <?php
    if(isset($_SESSION['email'])){
     echo   "<div class='menu caja2'>
            <ul class='over'>
                <li style='color:white !important; float:left;'>Hola ".$_SESSION['nombre']."&nbsp</li>
                <li class='floatL'><a href='formulario-creacion.php'>|&nbspNuevo&nbsp|</a></li>
                <li class='floatL'><a href='../includes/functions.php?action=eliminar'>&nbspCerrar session&nbsp|</a></li>
                <li class='clear'></li>
                </ul>
                </div>";
            } else {
                echo "<div class='menu caja2'>
                <ul>
                <li><a href='./formulario-login.php'>|&nbspIngresar&nbsp|</a></li>
            </ul>
        </div>";
    }
    ?>
        <div style="clear:both"></div>
    </div>
    
