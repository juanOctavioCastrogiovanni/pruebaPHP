<?php $admin = FALSE;
<<<<<<< HEAD:formulario-login.php
    include("./includes/header.php");
    include("./includes/functions.php");?>
=======
    include("./includes/header.php");?>
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff:login.php
<div class="principal">
    <div class="fondo1">
        <div class="box1 ">
            <h3 class="text-center">Para ingresar coloque sus credenciales</h3>
<<<<<<< HEAD:formulario-login.php
            <?php 
                if(isset($_GET['rta'])){
                  echo mostrarMensaje($_GET['rta']);
                }
            ?>
=======
>>>>>>> 838bec07db29d13ce7fa2c42b4a76fb15e3e4cff:login.php
            <form class="text-center margin20 login-form" method="POST" action="./admin/login.php">
                <p> Email </p>
                <input type="email" name="email">
                <p> Contraseña </p>
                <input type="password" name="pass"><br>
                <button class="enviar margin20" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php include("./includes/footer.php");?>