<?php
$admin = TRUE;
include("../includes/header.php");
?>
<div class="principal size">
    <div class="container">  
    <form classs="contact" action="pass.php?id=x" method="POST" enctype="multipart/formdata">
        <h3>Cambio de contraseña</h3>
        <h4>Complete los campos para cambiar la contraseña</h4>
        <fieldset>
        <input placeholder="Contraseña" name="pass" type="text" required autofocus>
        </fieldset>
        <fieldset>
        <input placeholder="Repita la contraseña" name="rePass" type="text" required autofocus>
        </fieldset>
       
        <fieldset>
        <button  type="submit" >Enviar</button>
        </fieldset>
    </form>
    <p>Para una modificación del mail, nombre y apellido, debera comunicarse con el administrador de sistema.</p>
    </div>
</div>

<?php
    include("../includes/footer.php");
    ?>