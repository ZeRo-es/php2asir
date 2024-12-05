<?php
session_start();
if(!isset($_SESSION["baraja"])){
    $_SESSION["baraja"]=[];
    $_SESSION["contador"]=0;
}
if(isset($_POST["boton"])){
    $num=rand(1,14);
    $_SESSION["baraja"][]=$num;
    $_SESSION["contador"]=$_SESSION["contador"]+$num;
    $baraja=$_SESSION["baraja"];

    $cuenta=count($baraja);

    for ($i=0; $i < $cuenta; $i++) { 
        echo "$baraja[$i]<br>";
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