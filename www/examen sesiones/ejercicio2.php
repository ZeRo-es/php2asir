<?php
session_start();
if (!isset($_SESSION["rojo"])) {
$_SESSION["rojo"]=125;
$_SESSION["azul"]=125;
$_SESSION["verde"]=125;
}
    if ($_SESSION["rojo"]<255 && $_SESSION["rojo"]>=15 && $_SESSION["azul"]<255 && $_SESSION["azul"]>=15 && $_SESSION["verde"]<255 && $_SESSION["verde"]>=15 ) {
        if (isset($_POST["rojo+"])) {
            $_SESSION["rojo"]+=10;
        }
        if (isset($_POST["rojo-"])) {
            $_SESSION["rojo"]-=10;
        }
        if (isset($_POST["azul+"])) {
            $_SESSION["azul"]+=10;
        }
        if (isset($_POST["azul-"])) {
            $_SESSION["azul"]-=10;
        }
        if (isset($_POST["verde+"])) {
            $_SESSION["verde"]+=10;
        }
        if (isset($_POST["verde-"])) {
            $_SESSION["verde"]-=10;
        }
    }else{
        echo "Excediste los límites, por favor reiniciar";
    }


if (isset($_POST["borrar"])) {
$_SESSION["rojo"]=125;
$_SESSION["azul"]=125;
$_SESSION["verde"]=125;
}
echo "<div style='background-color:rgb($_SESSION[rojo],$_SESSION[azul],$_SESSION[verde]);width:100px;height:100px;'></div>";

print_r($_SESSION);
?>
<form action="" method="POST">
    <input type="submit" name="rojo+" value="rojo+">
    <input type="submit" name="rojo-" value="rojo-">
    <input type="submit" name="azul+" value="azul+">
    <input type="submit" name="azul-" value="azul-">
    <input type="submit" name="verde+" value="verde+">
    <input type="submit" name="verde-" value="verde-">
    <input type="submit" name="borrar" value="borrar">
</form>