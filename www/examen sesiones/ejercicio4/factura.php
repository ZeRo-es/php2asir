<?php
session_start();
$raton=$_SESSION["raton"]; 
$teclado=$_SESSION["teclado"]; 
$CPU=$_SESSION["CPU"]; 
$tarjeta=$_SESSION["tarjeta"]; 
$total=$raton*2+$teclado*5+$CPU*10+$tarjeta*20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Factura de compra</h2><br><br>
    <p>Ratones: <?php echo "$raton"; ?></p>
    <p>Teclado: <?php echo "$teclado"; ?></p>
    <p>CPU: <?php echo "$CPU"; ?></p>
    <p>Tarjetas graficas: <?php echo "$tarjeta"; ?></p>
    <p>Total: <?php echo "$total"; ?> Euros</p>
    <form action="./login.php" method="post">
    <input type="submit" name="boton" value="Cerrar sesion">
    </form><br>
    <form action="./carrito.php" method="post">
    <input type="submit" name="boton" value="Volver a la cesta">
    </form>
</body>
</html>