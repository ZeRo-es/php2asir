<?php
    ob_start();
    session_start();
?>
<?php
        include 'conexion.php';
        $id = $_SESSION["id"];
        $sql = "SELECT numAccesos FROM usuarios WHERE id = :id";
        $sentencia = $conexion->prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia->bindParam(":id", $id);
        $sentencia -> execute();
        $fila = $sentencia -> fetch();
        $num=$fila["numAccesos"];
        echo "Bienvenido {$_SESSION["usuario"]}<br>";
        echo "Numero de Acceso $num";
?>
<?php
    include 'conexion.php';
    if (isset($_POST["enviar"])) {
        $dir_subida = './ficheros/';
        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
        move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido);

        $name=$_FILES["fichero_usuario"]["name"];
        $type=$_FILES["fichero_usuario"]["type"];
        $size=$_FILES["fichero_usuario"]["size"];
        print_r($name);
        $sql = "INSERT INTO documentos(nombreFichero, tamanyo, extension) VALUES (:nombreFichero, :tamanyo, :extension) WHERE usuario=:id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(":nombreFichero", $name);
        $sentencia->bindParam(":tamanyo", $size);
        $sentencia->bindParam(":extension", $type);
        print_r($_FILES ["fichero_usuario"]["type"]);
    }
    // CON LIKE TABLAS Y DEMAS se podria visualizar las cosas
?>
<form enctype="multipart/form-data" action="" method="POST">
 <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
 Enviar este fichero: <input name="fichero_usuario" type="file" />
 <input type="submit" name="enviar" value="Enviar fichero" />
</form>
 <form action="./logout.php" method="post">
    <input type="submit" name="Logout" value="Logout">
 </form>