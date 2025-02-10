<?php
    include "conexion.php";

    if (isset($_POST["nombre"], $_POST["email"], $_POST["password"], $_POST["confirmar"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $contrasenya = $_POST["password"];
        $confirmar = $_POST["confirmar"];

        if ($contrasenya == $confirmar) {
                $passwordEncriptado = password_hash($contrasenya, PASSWORD_BCRYPT);
                $sql = "INSERT INTO `usuarios` (nombre, email, contrasenya) VALUES (:nombre, :email, :contrasenya)";
                $sentencia = $conexion -> prepare($sql);
                $sentencia->bindParam(":nombre", $nombre);
                $sentencia->bindParam(":email", $email);
                $sentencia->bindParam(":contrasenya", $passwordEncriptado);
                $isOk = $sentencia -> execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok
                
                $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
                echo $idGenerado;
                echo "<br>Usuario Creado";
            }
         else {
            echo "La contraseña no es igual";
        }
    }
    print_r($_POST);
?>
<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="password" name="confirmar" placeholder="Confirmar contraseña" required><br>
    <input type="submit" value="Crear cuenta">
</form>

<form action="./index.php" method="post">
    <input type="submit" value="Volver">
</form>