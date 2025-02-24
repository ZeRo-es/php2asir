<?php
    ob_start();
    session_start();
    include 'conexion.php';
    if (isset($_POST["enviar"])) {
        if (!empty($_POST["usuario"])&& !empty($_POST["password"])) {

            $usuario= $_POST["usuario"];  
            $password = $_POST["password"] ;
            $sql = "SELECT nombre,password,id FROM usuarios";
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
            while($fila = $sentencia -> fetch()){
            if ($usuario == $fila["nombre"] && $password == $fila["password"]) {
                $_SESSION["usuario"]=$fila["nombre"];
                $_SESSION["id"]=$fila["id"];
                    $id = $_SESSION["id"];
                    $sql = "SELECT numAccesos FROM usuarios WHERE id = :id";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                    $sentencia->bindParam(":id", $id);
                    $sentencia -> execute();
                    $fila = $sentencia -> fetch();
                    $ida=$fila["numAccesos"]+1;
            
                    $sql1 = "UPDATE usuarios SET numAccesos=:numAccesos WHERE id=:id";   
                    $sentencia1 = $conexion->prepare($sql1);
                    $sentencia1->bindParam(":id", $id);
                    $sentencia1->bindParam(':numAccesos', $ida);
                    $sentencia1->execute(); 
                    
                if ($fila["role_user"]=="ROLE_ADMIN") {
                    header('Location: ./admin.php');
                }else {
                    header('Location: ./index.php');
                }
            }
            }
            if (empty($_SESSION["usuario"])) {
                echo "usuario o contraseña incorrecta";
            }
        }
    }
?>
 <form action="" method="post">
    <input type="text" name="usuario">
    <input type="text" name="password">
    <input type="submit" name="enviar">
 </form>
