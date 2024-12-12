<?php
session_start();



if(isset($_POST["der"])){
    $_SESSION["carrera"][$_SESSION["posicion"]]=0;
    $_SESSION["posicion"]+=1;
}
if(isset($_POST["izq"])){
    $_SESSION["carrera"][$_SESSION["posicion"]]=0;
    $_SESSION["posicion"]-=1;
}
if (isset($_POST["borrar"])) {
    $_SESSION=[];
}
print_r($_SESSION);

?>

<form action="" method="post">
<input type="submit" name="izq" value="izquierda">
<input type="submit" name="der" value="derecha">
<input type="submit" name="borrar" value="borrar">
</form>