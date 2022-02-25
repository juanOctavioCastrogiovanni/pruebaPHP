<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "blogup";

        $conn = mysqli_connect($host,$user,$pass);
        mysqli_select_db($conn,$db);

        return $conn;
    }

    function ordenarFecha($fechaOriginal){
        //cambia el formato del objeto date           
    setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
    $d = $fechaOriginal;
    return $fecha = strftime("%d de %B de %Y");
    }

?>