<?php
ob_start();
session_start();
    include "conexion.php";
    if (isset($_POST["user"]) && isset($_POST["password"])) {
        $user = $_POST["user"] ;         
        $password = $_POST["password"] ;
        $confirmar = $_POST["confirmar"] ;
        $fotoperfil = $_FILES['fotoperfil']['name'];
        if (empty($fotoperfil)) {
            $fotoperfil = "gojo.webp";
        }
    //Si la contraseña es igual a confirmar
    if ($password == $confirmar) {
        $sql4 = "SELECT * FROM usuariosig WHERE user = :user";
            $sentencia4 = $conexion -> prepare($sql4);
            $sentencia4 -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia4->bindParam(":user", $user);
            $sentencia4 -> execute();
            $fila4 = $sentencia4 -> fetch();
            if (!empty($fila4["user"])) {
               echo "Este usuario ya existe";
            }else {
                # code...

            //Se sube las fotos a una carpeta del servidor
            $dir_subida = './fotosperfil/';
            $fichero_subido = $dir_subida . basename($_FILES['fotoperfil']['name']);
        
            move_uploaded_file($_FILES['fotoperfil']['tmp_name'], $fichero_subido);

            //insertan datos a la tabla          
            $sql = "INSERT INTO usuariosig(user,password,fotoperfil) VALUES (:user,:password,:fotoperfil)";
            
            $sentencia = $conexion -> prepare($sql);
            $sentencia->bindParam(":user", $user);
            $sentencia->bindParam(":password", $password);
            $sentencia->bindParam(":fotoperfil", $fotoperfil);
            $isOk = $sentencia -> execute();
            $idGenerado = $conexion->lastInsertId();
            //hace consulta para guardar las variables de sesión para el index :: muchos problemas
            $sql2 = "SELECT * FROM usuariosig";
            $sentencia2 = $conexion -> prepare($sql2);
            $sentencia2 -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia2 -> execute();
            
            while($fila = $sentencia2 -> fetch()){ //vamos recorriendo fila a fila
                $_SESSION["nombre"]=$fila["user"];
                $_SESSION["fotoperfil"]=$fila["fotoperfil"];
                $_SESSION["rol"]=$fila["role"];
                $_SESSION["id"]=$fila["id"];
            }
            //nos dirije a index.php
            header("Location: ./index.php");
            }}else {
                    echo "Copie la misma contraseña";
                }
        }

?>   
<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend>Registro:</legend>
    <input type="text" name="user" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <input type="password" name="confirmar" placeholder="Confirme contraseña" required><br>
    <input type="file" name="fotoperfil" id="imagen"> * Opcional</input><br>
    <input type="submit" value="Registrar">
    </fieldset>
</form>
<form action="./login.php" method="post">
    <input type="submit" value="Volver">
</form>