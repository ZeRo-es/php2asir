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

    if (isset($_POST["botones"])) {
        if ( $_SESSION["tirada"]<=4) {
            for ($i=0; $i < 5; $i++) { 
                if ($_POST["botones"]==$_SESSION["prem"][$i]) {
                    $_SESSION["dinero"]+=1000;
                }
            }
        $_SESSION["tirada"]+=1;
        }else {
            echo "Tiradas Maximas, por favor repetir<br>";
        }
    }





echo "Numeros premiados: <br><br>";
for ($i=0; $i < 5; $i++) { 
    echo "{$_SESSION["prem"][$i]} ";
}

echo "<br>";
echo "<br>";
echo "Premios acumulados:{$_SESSION["dinero"]}";
echo "<br>";
echo "<br>";
echo "Tiradas:{$_SESSION["tirada"]}";
echo "<br>";
echo "<br>";

?>

<form action="" method="POST">
    <?php
        for ($i=1; $i <= 15; $i++) { 
            echo "<input type='submit' name='botones' value='$i'>";
        }
    ?>
    <br>
    <input type="submit" name="cancelar" value="cancelar">

</form>

