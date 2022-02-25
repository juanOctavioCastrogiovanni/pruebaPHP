<?php
$admin = FALSE;
include("./includes/functions.php");
include("./includes/header.php");
$con = conectar();

$sql = "SELECT blogs.id,titulo,fecha,nombre,apellido,imagen FROM blogs INNER JOIN docentes;";
$query = mysqli_query($con,$sql);

?>
<div class='cuerpo'>
    <div class="panel">
        <div><h1><i>Listado de blogs</i></h1></div>
                <div class="card">
                    <?php while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo "<div>";
                        echo "<a href='http://localhost/pruebaPHP/detalle.php?id=".$row['id']."'>";
                        echo "<img src='./upload/docentes/".$row['imagen']."'>";
                        echo  "<h2>".$row['titulo']."</h2>";
                        
                        $fecha = ordenarFecha($row['fecha']);

                        echo  "<h4>$fecha</h4>";
                        echo  "<p>".$row['nombre']." ".$row['apellido']."</p>";
                    echo "</a></div>";
                    }
                    ?>
            </div>

          </div>
    </div>
</div>

<?php
    include("./includes/footer.php");
    ?>