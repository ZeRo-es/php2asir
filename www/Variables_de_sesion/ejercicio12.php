<?php
session_start();
if (!isset($_SESSION["prem"])) {
}
if ($_POST["minimo"]<1) {
    echo"<h2>No has introducido ningun valor</h2>";
}


?>

<form action="" method="POST">

    <?php
        $minimo=$_POST["minimo"];
        for ($i=1; $i <= $minimo; $i++) { 
            echo "<img src='./bolos/retrato/bolo.png' width='100px'>";
            echo "<input type='submit' name='botones' value='QUITAR'>";
        }

    ?>
    <p><input type="number" name="minimo" placeholder="min"></p>
    <br>
    <input type="submit" name="cancelar" value="cancelar">

</form>

