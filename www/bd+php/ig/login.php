<?php
    ob_start();
    session_start();

    include "conexion.php";
    if (isset($_POST["logear"])) {
        #Empty para saber si los valores están vacíos y el ! para negar
        if (!empty($_POST["user"]) && !empty($_POST["password"])) {
            $user = $_POST["user"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM usuariosig WHERE user = :user AND password = :password";
            $sentencia = $conexion->prepare($sql);
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->bindParam(":user", $user);
            $sentencia->bindParam(":password", $password);
            $sentencia->execute();
            $fila = $sentencia->fetch();
            #Si la fila es null significa que no existe el usuario o se equivocó de contraseña
            if (empty($fila)) {
                echo "Usuario no existe o Contrasena incorrecta";
            } else {
                $_SESSION["nombre"] = $fila["user"];
                $_SESSION["fotoperfil"] = $fila["fotoperfil"];
                $_SESSION["rol"] = $fila["role"];
                $_SESSION["id"] = $fila["id"];
                header("Location: ./index.php");
            }
        } else {
            echo "Introduce los valores";
        }
    }
?>

<form action="" method="post">
    <fieldset>
        <legend>Login:</legend>
        <input type="text" name="user" placeholder="Usuario"><br><br>
        <input type="password" name="password" placeholder="Contraseña"><br><br>
        <input type="submit" name="logear" value="Login"><br>
    </form>
    <form action='registro.php' method='post'>
        <br><input type='submit' value='Registrar usuario'>
    </form>
</fieldset>

