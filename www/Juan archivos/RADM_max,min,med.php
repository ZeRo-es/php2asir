<?php

$temp=[];

// ¡Generar una canatidad aleatoria de $temp!
for ($i=1; $i <= 100; $i++) {
   $temp[]=rand(1,100);
}

$max=0;
$min=1;
$total=0;

for ($i=1; $i < 100; $i++) {
    echo "<p> $temp[$i] </p>";
}

for ($var=0; $var < count($temp); $var++) {
if ($temp[$var] < $min) {
    $min = $temp[$var];
}
if ($max < $temp[$var]) {
    $max = $temp[$var];
};
$total += $temp[$var];
}
echo "El numero  mayor es:" .$max ;
echo "<br>El numero menor es:" .$min;
echo "<br>El numero medio es:" .$total/count($temp);

echo "<br>///////////////////////////////////////////////////////////////////////////";

for ($i=100; $i >= 1; $i--) {
    echo "<p> $temp[$i] </p>";
}

/* 

// Con numeros fijos
for ($i=1; $i <= 100; $i++) {
    $temp[$i]=$i;
 }
 
 
 for ($i=1; $i <= 100; $i++) {
     echo "<p> $temp[$i] </p>";
 }
 
 
 echo "<br>///////////////////////////////////////////////////////////////////////////";
 
 for ($i=count($temp); $i >= 1; $i--) {
     echo "<p> $temp[$i] </p>";
 }

*/

?>