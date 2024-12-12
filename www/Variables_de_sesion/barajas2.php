<?php
session_start();
if(!isset($_SESSION["baraja2"])){
    $_SESSION["baraja2"]=[];
    $_SESSION["contador2"]=0;
}
if(isset($_POST["boton"])){
    if ($_SESSION["contador2"]<=21) {
    $num=rand(1,13);
    $_SESSION["baraja2"][]=$num;
    $_SESSION["contador2"]=$_SESSION["contador2"]+$num;
    $baraja=$_SESSION["baraja2"];

    $cuenta=count($baraja);
    
    for ($i=0; $i < $cuenta; $i++) { 
        echo "<img src= './images/$baraja[$i].svg' width='60px'>";
    }
    }else {
        echo "Perdiste, partida acabada";
    }

}
if(isset($_POST["borrar"])){
    $_SESSION=[];
}



?>
<form action="" method="post">
<input type="submit" name="boton" value="boton">
<input type="submit" name="borrar" value="borrar">
</form>