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
    <fieldset>
    <legend>Registro:</legend>
    <input type="text" name="user" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="password" name="confirmar" placeholder="Confirme contraseña" required><br>
    <input type="file" name="fotoperfil" id="imagen" required> * Opcional</input><br>
    <input type="submit" value="Registrar">
    </fieldset>
</form>
<form action="./login.php" method="post">
    <input type="submit" value="Volver">
</form>