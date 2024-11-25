<?php
session_start();

if(isset($_POST["numero"])){
    $_SESSION["numero"]=0;
}

if(isset($_POST["mas"])){
    $_SESSION["numero"]=$_SESSION["numero"]+1;
}

if(isset($_POST["menos"])){
    $_SESSION["numero"]=$_SESSION["numero"]-1;
}

if(isset($_POST["borrar"])){
    $_SESSION["numero"]=0;
}

echo $_SESSION["numero"];

?>

<form action="" method="post">
<input type="submit" name="mas" value="incrementar">
<input type="submit" name="menos" value="decrementar">
<input type="submit" name="borrar" value="borrar">
</form>