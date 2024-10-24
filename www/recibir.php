<?php

//$nombre=$_GET["nombre"];
//$password=$_GET["pass"];
//$boton=$_GET["boton"];
//
//
//echo "Mi nombre es $nombre y mi contraseña es $password";
//echo "<br>Mi nombre es {$nombre} y contraseña {$nombre}";
//echo "<br>Mi nombre es ".$nombre." y contraseña es ".$password."";

//------------------------------------------------------------------

$nombre=$_POST["nombre"];
$password=$_POST["pass"];
$boton=$_POST["boton"];


echo "Mi nombre es $nombre y mi contraseña es $password";
echo "<br>Mi nombre es {$nombre} y contraseña {$nombre}";
echo "<br>Mi nombre es ".$nombre." y contraseña es ".$password."";

?>