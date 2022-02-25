<?php
$admin = TRUE;
include("../includes/header.php");
?>
<div class="principal size">
    <div class="container">  
    <form class="contact" action="CrearBlog.php" method="POST" enctype="multipart/formdata">
        <h3>Complete formulario de blog</h3>
        <h4>Llene este formulario para cargar un nuevo blog a la plataforma</h4>
        <fieldset>
        <input placeholder="Titulo" name="titulo" type="text" required autofocus>
        </fieldset>
        <fieldset>
        <textarea placeholder="Descripcion" name="descripcion" required></textarea>
        </fieldset>
        <fieldset>
        <label> Subir archivos</label>
        <input type="file" name="archivo[]" required>
        </fieldset>
        <fieldset>
        <button  type="submit" id="contact-submit">Enviar</button>
        </fieldset>
    </form>
    
    </div>
</div>

<?php
    include("../includes/footer.php");
?>