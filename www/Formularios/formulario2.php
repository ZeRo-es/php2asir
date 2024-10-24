<form action="" method="post">
<input type="number" name="num1" >
<input type="number" name="num2" >
<input type="number" name="num3" >
<input type="submit" name="boton" value="Enviar" required>
</form>

<?php

if(isset($_POST["boton"])){
    $a=$_POST["num1"];
    $b=$_POST["num2"];
    $c=$_POST["num3"];
    if ($a == $b && $a > $c) {
        echo "<p>$a y $b son mayores</p>";
    } elseif ($b == $c && $b > $a) {
        echo "<p>$b y $c son mayores</p>";
    } elseif ($a == $c && $a > $b) {
        echo "<p>$a y $c son mayores</p>";
    } elseif ($a > $b && $a > $c) {
        echo "<p>$a es mayor</p>";
    } elseif ($a < $b && $b > $c) {
        echo "<p>$b es mayor</p>";
    } elseif ($a < $c && $b < $c) {
        echo "<p>$c es mayor</p>";
    } else {
        echo "<p>todos son iguales</p>";    
    }
}

?>