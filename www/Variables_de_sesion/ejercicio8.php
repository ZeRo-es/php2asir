<?php
session_start();

if(isset($_POST["ojos"])){
    $_SESSION["ojos"]=rand(1,3);
    $ojos=$_SESSION["ojos"];
}
if(isset($_POST["nariz"])){
    $_SESSION["nariz"]=rand(1,3);
}
if(isset($_POST["boca"])){
    $_SESSION["boca"]=rand(1,3);
}

echo "<img src='./bolos y caras/retrato/retrato_$_SESSION[ojos]_1.png' width='300px' ><br>";
echo "<img src='./bolos y caras/retrato/retrato_$_SESSION[nariz]_2.png' width='300px'><br>";
echo "<img src='./bolos y caras/retrato/retrato_$_SESSION[boca]_3.png' width='300px'><br>";



print_r($_SESSION);

if ($_SESSION["ojos"]==$_SESSION["nariz"] && $_SESSION["nariz"]== $_SESSION["boca"] ) {
    echo "Bien";
}



?>
<form action="" method="post">
<input type="submit" name="ojos" value="ojos">
<input type="submit" name="nariz" value="nariz">
<input type="submit" name="boca" value="boca">
</form>