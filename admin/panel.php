<?php
$admin = TRUE;
include("../includes/header.php");
?>
    <div class='cuerpo'>
        <div class="panel">
            <div><h1><i>Listado de blogs</i></h1></div>
                <div class="card">
                    <div>
                        <img src="../updates/docentes/perfil1.jpg">
                        <h2>Titulo del blog del profe</h2>
                        <h4>fecha</h4>
                        <p>autor</p>
                        <a href="eliminar.php?id=1">Eliminar</a>
                        <a href="actualizar.php?id=1">Actualizar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include("../includes/footer.php");
    ?>