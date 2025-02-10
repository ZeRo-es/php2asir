<?php
session_start();
if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    $_SESSION["usuario"]=$usuario;
}

if (!isset($_SESSION["raton"]) || !isset($_SESSION["teclado"])|| !isset($_SESSION["CPU"])|| !isset($_SESSION["tarjeta"])) {
    $_SESSION["raton"] = 0;
    $_SESSION["teclado"] = 0;
    $_SESSION["CPU"] = 0;
    $_SESSION["tarjeta"] = 0;
}

if (isset($_POST["borrar"])) {
    $_SESSION["raton"] = 0; 
    $_SESSION["teclado"] = 0; 
    $_SESSION["CPU"] = 0; 
    $_SESSION["tarjeta"] = 0; 
}
if ($_SESSION["raton"] > 0 || $_SESSION["teclado"] > 0 || $_SESSION["CPU"] > 0 || $_SESSION["tarjeta"] > 0) {
    if (isset($_POST["menos1"]) && $_SESSION["raton"] > 0) {
        $_SESSION["raton"] -= 1;
    }
    if (isset($_POST["menos2"]) && $_SESSION["teclado"] > 0) {
        $_SESSION["teclado"] -= 1;
    }
    if (isset($_POST["menos3"]) && $_SESSION["CPU"] > 0) {
        $_SESSION["CPU"] -= 1;
    }
    if (isset($_POST["menos4"]) && $_SESSION["tarjeta"] > 0) {
        $_SESSION["tarjeta"] -= 1;
    }
}

if (isset($_POST["mas1"])) {
    $_SESSION["raton"] += 1;
}
if (isset($_POST["mas2"])) {
    $_SESSION["teclado"] += 1;
}
if (isset($_POST["mas3"])) {
    $_SESSION["CPU"] += 1;
}
if (isset($_POST["mas4"])) {
    $_SESSION["tarjeta"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <form action="./login.php" method="post">
            <?php echo "Usuario Logueado: {$_SESSION["usuario"]}"; ?>
            <br>
            <input type="submit" value="Cerrar Sesion">
        </form>
    </h2>

    <h2>Raton:</h2>
    <form action="" method="post">
        <input type="submit" name="mas1" value="+">
        <input type="submit" name="menos1" value="-">
        <?php echo "{$_SESSION['raton']}"; ?>
    </form>

    <h2>Teclado:</h2>
    <form action="" method="post">
        <input type="submit" name="mas2" value="+">
        <input type="submit" name="menos2" value="-">
        <?php echo "{$_SESSION['teclado']}"; ?>
    </form>

    <h2>CPU:</h2>
    <form action="" method="post">
        <input type="submit" name="mas3" value="+">
        <input type="submit" name="menos3" value="-">
        <?php echo "{$_SESSION['CPU']}"; ?>
    </form>

    <h2>Tarjeta Grafica:</h2>
    <form action="" method="post">
        <input type="submit" name="mas4" value="+">
        <input type="submit" name="menos4" value="-">
        <?php echo "{$_SESSION['tarjeta']}"; ?>
    </form><br>
    <form action="" method="post">
        <input type="submit" name="borrar" value="Vaciar canasta">
    </form><br>

    <form action="./factura.php" method="post">
        <input type="submit" value="Finalizar compra">
    </form>
</body>
</html>
