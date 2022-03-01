<?php
$admin = TRUE;
$action = "./editar-blog.php";
include("../includes/header.php");
if(!isset($_SESSION['email'])){
    header("Location:http://localhost/pruebaPHP/panel.php");
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