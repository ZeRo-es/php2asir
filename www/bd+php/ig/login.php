<?php
    ob_start();
    session_start();

    include "conexion.php";
    if(isset($_POST["logear"])){
        #Empty para saber si los valores están vacíos y el ! para negar
        if (!empty($_POST["user"]) && !empty($_POST["password"])) {
            $user = $_POST["user"] ;        
            $password = $_POST["password"] ;
            $sql = "SELECT * FROM usuariosig WHERE user = :user AND password = :password";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->bindParam(":user", $user);
            $sentencia->bindParam(":password", $password);
            $sentencia -> execute();
            $fila = $sentencia -> fetch();
            if(empty($fila["user"])){
            }else {
                $_SESSION["nombre"]=$fila["user"];
                $_SESSION["foto"]=$fila["fotoperfil"];
                $_SESSION["rol"]=$fila["rol"];
                header("Location: ./index.php");
            }
        }else{
            echo "introduce los valores";
        }

    }
?>
<form action='registro.php' method='post'><input type='submit' value='Crear usuario'></form>

<form action="" method="post">
    <input type="user" name="user" placeholder="Usuario" ><br>
    <input type="password" name="password" placeholder="Contraseña" ><br>
    <input type="submit" name="logear" value="logear">
</form>
