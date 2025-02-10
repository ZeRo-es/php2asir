<?php
session_start();
$minimo=$_POST["minimo"];
if (!isset($_SESSION["TIRAR"])) {
    if ($_POST["minimo"]<1) {
        echo"<h2>No has introducido ningun valor</h2>";
    }else {
        for ($i = 0; $i <= $minimo; $i++) {
            $_SESSION["bolos"][$i] = "<img width='100px' src='./bolos/retrato/bolo.png'><br>";
            echo $_SESSION["bolos"][$i] . " " . $i; 
            echo "<form action='' method='post'><button type='submit' name='Quitar' value='{$i}'>QUITAR</button></form>";
        }
    }

}
if (isset($_POST["Quitar"])) {
    $_SESSION["bolos"][$_POST["Quitar"]] = "<img width='100px' src='./bolos/retrato/boloTumbado.png'><br>";
    for ($i = 0; $i <= $minimo; $i++) {
        echo "<td>";
        echo $_SESSION["bolos"][$i] . " " . $i;   
        echo "<form action='' method='post'><button type='submit' name='Quitar' value='{$i}'>QUITAR</button></form>";
    }
}

if (isset($_POST["Borrar"])) {
        $_SESSION=[];
}
print_r($_SESSION);



?>

<form action="" method="POST">

    <?php

    ?>
    <p><input type="number" name="minimo" placeholder="min"></p>
    <br>
    <input type="submit" name="TIRAR" value="TIRAR">
    <input type="submit" name="Borrar" value="BORRAR">

</form>

