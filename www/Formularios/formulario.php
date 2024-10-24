
<?php

if(isset($_POST["boton"])){

$nombre=$_POST["nombre"];
$password=$_POST["pass"];

echo "Mi nombre es $nombre y mi contraseña es $password";
echo "<br>Mi nombre es {$nombre} y contraseña {$nombre}";
echo "<br>Mi nombre es ".$nombre." y contraseña es ".$password."";
}

?>

<form action="" method="post">
<input type="text" name="nombre" placeholder="Introduce nombre">
<input type="password" name="pass" placeholder="Introduce contraseña">
<input type="submit" name="boton" value="Enviar">
</form>