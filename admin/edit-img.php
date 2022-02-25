<?php
$admin = TRUE;
include("../includes/header.php");
?>
<div class="principal size">
    <div class="container">  
    <form class="contact" action="pass.php?id=x" method="POST" enctype="multipart/formdata">
        <h3>Cambie su foto de perfil</h3>
        <h4>Complete los campos para cambiar subir una nueva foto para su blog</h4> 
        <fieldset>
        <label> Subir imagen</label>
        <input type="file" name="imagen" required>
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