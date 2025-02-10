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
    $_SESSION["partida"]+=1;
    $maxCarta = $cartas[0];
    $minCarta = $cartas[0];

    for ($i = 1; $i < count($cartas); $i++) {
        if ($cartas[$i] > $maxCarta) {
            $maxCarta = $cartas[$i];
        }
        if ($cartas[$i] < $minCarta) {
            $minCarta = $cartas[$i];
        }
    }
    $_SESSION["max"][] = $maxCarta;
    $_SESSION["min"][] = $minCarta;

}
    
    echo "<table border='1' solid;black;>";
    echo "<tr>";
    echo "<th>Max:</th>";
        for ($i = 0; $i < count($_SESSION["max"]); $i++) {
            echo "<td>{$_SESSION["max"][$i]}</td>";
        }
    echo "</tr>";
    echo "<tr>";
    echo "<th>Min:</th>";
        for ($i = 0; $i < count($_SESSION["min"]); $i++) {
            echo "<td>{$_SESSION["min"][$i]}</td>";
        }
    echo "</tr>";
    echo "<br>Partida:$_SESSION[partida]";


if (isset($_POST["BORRAR"])) {
    $_SESSION=[];
}
?>

<form action="" method="POST">
    <input type="submit" name="empezar" value="empezar">
    <input type="submit" name="BORRAR" value="BORRAR">
</form>