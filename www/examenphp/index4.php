<form action="" method="post">
    <input type="number" name="num" required>
    <input type="submit" name="Enviar" value="Enviar">
</form>


<?php
if(isset($_POST["Enviar"])){
    $num=$_POST["num"];
    $cartas=[];
    $cartas2=[];
    
    $jugador1=0;
    $jugador2=0;

    for ($i=0; $i <$num ; $i++) { 
        $cartas[]=rand(1,13);
    }
    for ($i=0; $i <$num ; $i++) { 
        $cartas2[]=rand(1,13);
    }
    for ($i=0; $i < $num; $i++) { 
        echo "<br>";
        echo "<img src= './images/$cartas[$i].svg' width='60px'>";
        echo "<img src= './images/$cartas2[$i].svg' width='60px'>";
        if ($cartas[$i] > $cartas2[$i]) {
            $jugador1++;
        }if ($cartas[$i] < $cartas2[$i]) {
            $jugador2++;
        } else {
        }
        echo "El jugador 1 tiene $jugador1 puntos y Jugador 2 tiene $jugador2 puntos";
        echo "<br>";
    }
    if ($jugador1>$jugador2) {
        echo "GANA JUGADOR1";
    }if ($jugador1<$jugador2) {
        echo "GANA JUGADOR2";
    }if($jugador1==$jugador2){
        echo "EMPATE";
    }else{
    }
}
?>