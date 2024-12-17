<?php
session_start();
if (!isset($_SESSION["max"])) {
$_SESSION["partida"]=0;
$_SESSION["max"]=[];
$_SESSION["min"]=[];
}
echo "Cartas:<br>";

    if (isset($_POST["empezar"])) {
        for ($i=0; $i < 10; $i++) { 
            $cartas[$i]=rand(1,13);
            echo "<img src= './images/$cartas[$i].svg' width='60px'>";
        }
    }
$_SESSION["partida"]+=1;

echo "<br>Partida:$_SESSION[partida]";


print_r($_SESSION);

if (isset($_POST["BORRAR"])) {
    $_SESSION=[];
}

?>

<form action="" method="POST">
    <input type="submit" name="empezar" value="empezar">
    <input type="submit" name="BORRAR" value="BORRAR">
</form>