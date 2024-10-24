<?php

//$dias=[];
//$dias[0]=25;
//$dias[1]=40;
//echo "Muestra el dia 0:".$dias[0];
//echo "<br>";
//echo "Muestra el dia 1:".$dias[1];
//$dias[]=55;
//print_r($dias);

$temp=[];
$temp[]=4;
$temp[]=44;
$temp[]=56;
$temp[]=9;
$temp[]=32;
$temp[]=26;
$temp[]=18;

$tama=count($temp);

//          WHILE
$i=0;
while($i<$tama){
    echo "$temp[$i]";
    echo "<br>";
    $i++;
}
//           FOR
//for ($i=0;$i<$tama;$i++) {
//    echo"$temp[$i]";
//    echo "<br>";
//}

?>