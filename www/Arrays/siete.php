<?php
$vector=[];
$siete=[];

for ($i=0; $i < 50; $i++) { 
    $vector[]=rand(0,12);
    if ($vector[$i]==7) {
        echo "En la posición $i hay un 7 <br>";
        $siete[]=$vector[$i];
    }
}
$numeros=count($siete);
echo "Hay $numeros sietes<br>";



print_r($vector);
print_r($siete);


?>