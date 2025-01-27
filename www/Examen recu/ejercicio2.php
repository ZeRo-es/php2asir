<?php
session_start();
$min=0;
$max=0;

if (isset($_POST["lanzar"])) {
    $cantidad=rand(3,7);
    echo "Jugador 1 ";
    for ($i=0; $i < $cantidad; $i++) { 
        $puntos1=rand(1,9);
        echo "$puntos1<br>";
    }
    echo "Jugador 2 ";
    for ($i=0; $i < $cantidad; $i++) { 
        $puntos2=rand(1,9);
        echo "$puntos2<br>";
    }
}




?>
<form action="" method="POST">
    <input type="submit" name="lanzar" value="lanzar"><br>
    <input type="submit" name="reset" value="reset">
</form>