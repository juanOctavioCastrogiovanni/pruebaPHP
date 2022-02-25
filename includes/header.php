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
    if($admin){
     echo   "<div class='menu caja2'>
            <ul>
                <li><a href='../login.php'>|&nbspINGRESAR&nbsp|</a></li>
                <!-- <li>HOLA&nbsp|&nbsp</li>
                <li>CERRAR SESION&nbsp|&nbsp</li> -->
            </ul>
        </div>";
    } else {
    echo    "<div class='menu caja2'>
            <ul>
                <li><a href='./login.php'>|&nbspINGRESAR&nbsp|</a></li>
                <!-- <li>HOLA&nbsp|&nbsp</li>
                <li>CERRAR SESION&nbsp|&nbsp</li> -->
            </ul>
        </div>";
    }
    ?>
        <div style="clear:both"></div>
    </div>
    
