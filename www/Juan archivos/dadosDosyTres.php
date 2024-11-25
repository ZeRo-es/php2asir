<?php

$numerobuc = rand(1,10);
$i = 1;
$dos= 0;
$tres= 0;
if ($numerobuc == 1) {
    echo "<p>Tienes $numerobuc dado</p>";
} else {
    echo "<p>Tienes $numerobuc dados</p>";
};
while ($i <=$numerobuc) {
    $dado= rand(1,6);
    echo "<p>$dado</p>";
    echo "<br>";
    if ($dado==2){
        $dos ++;
    }elseif ($dado==3){
        $tres ++;
    };
    $i=$i+1;
}
 echo "<p>Cantidad total de doses: $dos</p>";
 echo "<p>Cantidad total de treses: $tres</p>";

?>