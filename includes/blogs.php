<div class='cuerpo'>
    <div class="panel">
        <div class="cDarkcian"><h1><i>Listado de blogs</i></h1></div>
                <div class="card">
                    <?php while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo "<div>";
                    if($admin){
                        echo "<a href='http://localhost/pruebaPHP/admin/detalle.php?id=".$row['id']."'>";
                        echo "<img src='../upload/docentes/".$row['imagen']."'>";
                    } else {
                            echo "<a href='http://localhost/pruebaPHP/detalle.php?id=".$row['id']."'>";
                            echo "<img src='./upload/docentes/".$row['imagen']."'>";
                        }
                        echo  "<h2>".$row['titulo']."</h2>";
                        // echo "<pre>";
                        // var_dump(ordenarFecha($row['fecha']));
                        // echo "</pre>";
                        // die();                       
                        $fecha = ordenarFecha($row['fecha']);

                        echo  "<h4>$fecha</h4>";
                        echo  "<p>".$row['nombre']." ".$row['apellido']."</p>";
                        echo  "<p>".$row['nombreCatedra']."</p>";
                    echo "</a>";
                        if($admin){
                           echo "<a href='eliminar.php?id=1'>Eliminar&nbsp</a>";
                           echo "<a href='actualizar.php?id=1'>Actualizar</a>";
                        }
                    echo "</div>";
                    }

                    ?>
            </div>

          </div>
    </div>
</div>