
    <form class="contact" action="<?php echo $action;?>" method="POST" enctype="multipart/form-data">
        <h3>Complete formulario de blog</h3>
        <h4>Llene este formulario para cargar un nuevo blog a la plataforma</h4>
        <fieldset>
        <input placeholder="<?php if($action!="./crear-blog.php"){echo $row['titulo'];} else {echo "Titulo";} ?>" name="titulo" type="text" required autofocus>
        </fieldset>
        <fieldset>
        <textarea placeholder="<?php if($action!="./crear-blog.php"){echo $row['cuerpo'];} else {echo "cuerpo";} ?>" name="cuerpo" required></textarea>
        </fieldset>
        <fieldset>
        <label> Subir archivos</label>
        <input type="file" name="archivo[]" id="archivo[]" multiple="" accept="application/pdf" required>
        </fieldset>
        <fieldset>
        <button  type="submit" id="contact-submit">Enviar</button>
        </fieldset>
    </form>
