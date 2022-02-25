<?php
$admin = FALSE;
include("./includes/functions.php");
include("./includes/header.php");

if(isset($_GET['id'])){
    $con = conectar();
    //consulta informacion de blog detalle
    $sql = "SELECT blogs.id AS id_blog,titulo,cuerpo,fecha,docentes.nombre,apellido,imagen FROM blogs INNER JOIN docentes ON blogs.id=".$_GET['id']."";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);
    $fecha = ordenarFecha($row['fecha']);
    //consulta informacion de los archivos adjuntos en el blog
    $sql2= "SELECT archivos.nombre FROM blogs INNER JOIN docentes INNER JOIN archivos ON blogs.id=".$_GET['id']."";
    $query2 = mysqli_query($con,$sql2);  

} 
?>
<div class="principal size ">

<div class="box3 fondo3">
    <img class="imagen1" src="./upload/docentes/<?php echo $row['imagen']?>" alt="">
    <h1 class="text-center"><?php echo $row['titulo']?></h2>
    <p class="text-center"><?php echo $fecha?></p>
    <p class="text-center"><?php echo $row['nombre']." ".$row['apellido']?></p>
    <p class="text1"><?php echo $row['cuerpo']?></p>
</div>
<div class="box3 fondo3 over">
    <h2 class="text-center margin20">Archivos descargables</h2>
    <?php while($archivos = mysqli_fetch_array($query2,MYSQLI_ASSOC)){;?>
    <a href="http://localhost/pruebaPHP/upload/archivos/<?php echo $archivos['nombre']?>" download="<?php echo $archivos['nombre']?>">
        <div class="floatL">
            <img class="pdf" src="./recursos/pdf-icon.png" alt="">
            <h3><?php echo $archivos['nombre'] ?></h3>
        </div>
    </a>
    <?php } ?>
    
        <div style="clear:both;"></div>
    </div>

</div>

<?php
    include("./includes/footer.php");
    ?>