<?php
session_start();

if(isset($_POST["borrar"])){
    $_SESSION["ar"] = 100;
    $_SESSION["iz"] = 100;
}

if(isset($_POST["iz"])){
    $_SESSION["iz"] -= 10;
}

if(isset($_POST["de"])){
    $_SESSION["iz"] += 10;
}
if(isset($_POST["ar"])){
    $_SESSION["ar"] -= 10;
}

if(isset($_POST["ab"])){
    $_SESSION["ar"] += 10;
}


echo "<div style='position:absolute;background-color:blue;width:100px;height:100px;border-radius:50%;top:$_SESSION[ar]px;left:$_SESSION[iz]px;'></div>";

?>

<form action="" method="post">
<input type="submit" name="iz" value="izquierda">
<input type="submit" name="de" value="derecha">
<input type="submit" name="ar" value="arriba">
<input type="submit" name="ab" value="abajo">
<input type="submit" name="borrar" value="borrar">
</form>