<?php
    $admin = FALSE;
    include("./includes/header.php");
?>
<div class="principal">
    <div class="fondo1">
        <div class="box1 ">
            <h3 class="text-center">Para ingresar coloque sus credenciales</h3>
            <form class="text-center margin20 login-form" method="POST" action="docente.php">
                <p> Email </p>
                <input type="email" name="email">
                <p> Contraseña </p>
                <input type="text" name="pass"><br>
                <button class="enviar margin20" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>




<?php
    include("./includes/footer.php");
?>