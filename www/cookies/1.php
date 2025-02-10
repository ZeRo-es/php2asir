
<form enctype="multipart/form-data" action="" method="POST">
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>

<?php
$dir_subida = './cookies';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);
?>