<?php
$admin = TRUE;
$action = "./crear-blog.php";
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
    <h1>Editor de archivos</h1>
    <table>
      <tbody>
        <tr>
            <td>Nombre de archivo cargado</th>
            <td><a href="eliminarArchivo.php?id=1">Eliminar</a></th>
        </tr>
        </tbody>
    </table>
    </div>
</div>

<?php
    include("../includes/footer.php");
    ?>