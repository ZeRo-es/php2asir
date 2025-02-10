<?php
session_start();


if (!isset($_SESSION['partido1']) || !isset($_SESSION['partido2'])) {
    $_SESSION['partido1'] = 0;
    $_SESSION['partido2'] = 0;
}


if (isset($_POST['partido1'])) {

    echo "Entra partido1<br>";
    $_SESSION['partido1'] = $_SESSION['partido1'] + 1;

} elseif (isset($_POST['partido2'])) {

    echo "Entra partido2<br>";

    $_SESSION['partido2']++;

} elseif (isset($_POST['borrar'])) {

    $_SESSION = array();
    $_SESSION['partido1'] = 0;
    $_SESSION['partido2'] = 0;
   
} 

print_r($_SESSION);
echo "<div>" . $_SESSION["partido1"] . "</div>";
echo "<div>" . $_SESSION['partido2'] . "</div>";

?>


<form action="" method="post">

    <input type="submit" name="partido1" value="partido1">
    <input type="submit" name="partido2" value="partido2">
    <input type="submit" name="borrar" value="borrar">

</form>
