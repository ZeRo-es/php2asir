<?php
session_start();

if(!isset($_SESSION["CartaEncontrada"])){
    $_SESSION["CartaEncontrada"]=[];
}

if (isset($_POST["tomar"])) {
    $carta=$_POST["carta"];
    $_SESSION["cartaazar"]=[];
    $i=0;
    while ($carta == $_SESSION["cartaazar"]) {
        $_SESSION["cartaaza"][$i]=rand(1,10);
        $i++;
    }
}

print_r($_POST);
print_r($_SESSION);
print_r($cartaazar);

if (isset($_POST["reiniciar"])) {
    $_SESSION=[];
}
?>
<form action="" method="POST">
    <input type="number" name="carta"><br>
    <input type="submit" name="tomar" value="tomar"><br>
    <input type="submit" name="reiniciar" value="reiniciar">
</form>