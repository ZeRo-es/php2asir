<?php
session_start();
if (!isset($_SESSION["prem"])) {
    $_SESSION["prem"]=[];
    $_SESSION["tirada"]=0;
    $_SESSION["dinero"]=0;
}
if (isset($_POST["cancelar"])) {
    for ($i=0; $i < 5; $i++) { 
        $_SESSION["prem"][$i]=rand(1,15);
        $_SESSION["tirada"]=0;
        $_SESSION["dinero"]=0;
    }

}

for ($a=0; $a < 15; $a++) { 
    $_SESSION["t$a"]=$a;
    if (isset($_POST["t$a"])) {
        if ($_SESSION["prem"][$a]=$_SESSION["t$a"][$a]) {
            $_SESSION["dinero"]+=1000;
        }
    }
}



echo "Numeros premiados: <br><br>";
for ($i=0; $i < 5; $i++) { 
    echo "{$_SESSION["prem"][$i]} ";
}

echo "<br>";
echo "<br>";
echo "Premios acumulados:";
echo "<br>";
echo "<br>";
echo "Tiradas:";
echo "<br>";
echo "<br>";

print_r($_SESSION);
?>

<form action="" method="POST">
    <?php
        for ($i=1; $i <= 15; $i++) { 
            echo "<input type='submit' name='botones' value='t$i'>";
        }
    ?>
    <br>
    <input type="submit" name="cancelar" value="cancelar">

</form>

