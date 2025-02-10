<?php
session_start();
if(!isset($_SESSION["cruz"])){
    $_SESSION["cruz"]=[];
    $_SESSION["ACNUR"]=[];
    $_SESSION["Maternity"]=[];
    $_SESSION["MSF"]=[];

}
if(isset($_POST["guardar"])){
    $_SESSION["cruz"][]=$_POST["cruz"];
    $_SESSION["ACNUR"][]=$_POST["ACNUR"];
    $_SESSION["Maternity"][]=$_POST["Maternity"];
    $_SESSION["MSF"][]=$_POST["MSF"];
}



if(isset($_POST["resultados"])){
  
    $donacruz=count($_SESSION["cruz"]);
    $donaACNUR=count($_SESSION["ACNUR"]);;
    $donaMaternity=count($_SESSION["Maternity"]);;
    $donaMSF=count($_SESSION["MSF"]);;
    for ($i=0; $i < $donacruz; $i++) { 
        $sumacruz=$sumacruz+$_SESSION["cruz"][$i];

    }
    for ($i=0; $i < $donaACNUR; $i++) { 
        $sumaac=$sumaac+$_SESSION["ACNUR"][$i];
    }
    for ($i=0; $i < $donaMaternity; $i++) { 
        $sumama=$sumama+$_SESSION["Maternity"][$i];
    }
    for ($i=0; $i < $donaMSF; $i++) { 
        $sumamsf=$sumamsf+$_SESSION["MSF"][$i];
    }
    echo "Numero total de personas que donaron a Cruz Roja : $donacruz<br>";
    echo "Numero total de personas que donaron a ACNUR: $donaACNUR<br>";
    echo "Numero total de personas que donaron a Maternity: $donaMaternity<br>";
    echo "Numero total de personas que donaron a MSF: $donaMSF<br>";

    $sumatotal=$sumacruz+$sumaac+$sumama+$sumamsf;
    

    echo "$sumacruz<br>";
    echo "$sumaac<br>";
    echo "$sumama<br>";
    echo "$sumamsf<br>";
    echo "$sumatotal";
    
}
print_r($_SESSION);
if (isset($_POST["reiniciar"])) {
    $_SESSION=[];
}
?>
<form action="" method="POST">
    <input type="number" name="cruz" value="0" >Cruz roja</input><br>
    <input type="number" name="ACNUR" value="0">ACNUR</input><br>
    <input type="number" name="Maternity" value="0">Maternity</input><br>
    <input type="number" name="MSF" value="0" >Médicos sin fronteras</input><br>
    <input type="submit" name="guardar" value="guardar"><br>
    <input type="submit" name="resultados" value="resultados"><br>
    <input type="submit" name="reiniciar" value="reiniciar">
</form>