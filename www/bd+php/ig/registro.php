<?php
ob_start();
    include "conexion.php";
    if (isset($_POST["user"]) && isset($_POST["password"])) {
        $user = $_POST["user"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
        $password = $_POST["password"] ;
        $confirmar = $_POST["confirmar"] ;
        $fotoperfil = $_POST["fotoperfil"] ;
        
    if ($password == $confirmar) {

        $sql = "INSERT INTO usuariosig(user,password,fotoperfil) VALUES (:user,:password,:fotoperfil)";
        
        $sentencia = $conexion -> prepare($sql);
        $sentencia->bindParam(":user", $user);
        $sentencia->bindParam(":password", $password);
        $sentencia->bindParam(":fotoperfil", $fotoperfil);
        $isOk = $sentencia -> execute();
        
        $idGenerado = $conexion->lastInsertId();
        echo $idGenerado;
        header("Location: ./login.php");
    }else {
        echo "Copie la misma contraseña";
    }

    }
?>   
<form action="" method="post">
    <input type="user" name="user" placeholder="text" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="password" name="confirmar" placeholder="Confirme contraseña" required><br>
    <input type="file" name="fotoperfil"placeholder="Introduzca su foto de perfil" required>Introduzca su foto de perfil</input><br>
    <input type="submit" value="registrar">
</form>
<form action="./login.php" method="post">
    <input type="submit" value="Volver">
</form>