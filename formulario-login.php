<?php $admin = FALSE;
    include("./includes/header.php");
    include("./includes/functions.php");?>
<div class="principal">
    <div class="fondo1">
        <div class="box1 ">
            <h3 class="text-center">Para ingresar coloque sus credenciales</h3>
            <?php 
                if(isset($_GET['rta'])){
                  echo mostrarMensaje($_GET['rta']);
                }
            ?>
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