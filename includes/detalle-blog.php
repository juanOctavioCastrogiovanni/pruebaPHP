<div class="principal size ">

<div class="box3 fondo3">
    <img class="imagen1" src="<?php if($admin){ echo "..";} else {echo ".";} ?>/upload/docentes/<?php echo $row['imagen']?>" alt="">
    <h1 class="text-center"><?php echo $row['titulo']?></h2>
    <p class="text-center"><?php echo $fecha?></p>
    <p class="text-center"><?php echo $row['nombre']." ".$row['apellido']?></p>
    <p class="text1"><?php echo $row['cuerpo']?></p>
   <?php  if($admin){
                           echo "<a style='text-decoration:none;' href='eliminar.php?id=1'>Eliminar&nbsp</a>";
                           echo "<a style='text-decoration:none;' href='actualizar.php?id=1'>Actualizar</a>";
    } ?>
</div>
<div class="box3 fondo3 over">
    <h2 class="text-center margin20">Archivos descargables</h2>
    <?php while($archivos = mysqli_fetch_array($query2,MYSQLI_ASSOC)){;?>
    <a href="http://localhost/pruebaPHP/upload/archivos/<?php echo $archivos['nombre']?>" download="<?php echo $archivos['nombre']?>">
        <div class="floatL">
            <img class="pdf" src="<?php if($admin){ echo "..";} else {echo ".";} ?>/recursos/pdf-icon.png" alt="">
            <h3><?php echo $archivos['nombre'] ?></h3>
        </div>
    </a>
    <?php } ?>
    
        <div style="clear:both;"></div>
    </div>

</div>