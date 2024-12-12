<?php
session_start();
$min=$_POST["min"];
$max=$_POST["max"];
if (!isset($_SESSION["bolo"])) {
    $_SESSION["bolo"]=[];
    $_SESSION["posicion"]=0;
}


?>

<form action="" method="post">
<input type="number" name="min" value="min" placeholder="min" required>
<input type="number" name="max" value="max" placeholder="max" required>
<input type="submit" name="borrar" value="borrar">
</form>
