<?php

$cartas=[];

$cartas2=[];

for ($i=0; $i <10 ; $i++) { 
    $cartas[]=rand(1,10);
}
for ($i=0; $i <10 ; $i++) { 
    $cartas2[]=$cartas[$i];
}
for ($i=0; $i < 10; $i++) { 
    echo "<br>";
    echo "<img src= './images/$cartas[$i].svg' width='60px'>";
}

print_r($cartas);
?>