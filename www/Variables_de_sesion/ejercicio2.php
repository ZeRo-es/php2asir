<?php
session_start();

if (!isset($_SESSION["contador"]) || isset($_POST["borrar"])) {

    $_SESSION["contador"] = 10;
}


if (isset($_POST["incremento"])) {

    $_SESSION["contador"] += 5;
}

if (isset($_POST["decremento"])) {

    $_SESSION["contador"] -= 5;
}


?>


<form action="" method="post">

<input type="submit" name="incremento" value="AUMENTA FUENTE +5">

<input type="submit" name="decremento" value="DECREMENTA FUENTE +5">

<br>
<br>
<br>

<input type="submit" name="borrar" value="borrar">

<p style="font-size:<?php echo $_SESSION["contador"] ?>px">ME ENCANTA PROGRAMAR<p>

</form>
