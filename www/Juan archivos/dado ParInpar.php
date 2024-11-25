<?php
$numerobuc = rand(1,10);
$i = 1;
$par= 0;
$impar= 0;
if ($numerobuc == 1) {
    echo "<p>Tienes $numerobuc dado</p>";
} else {
    echo "<p>Tienes $numerobuc dados</p>";
};
while ($i <=$numerobuc) {
    $dado= rand(1,6);
    echo "<p>$dado</p>";
    echo "<br>";
    if (($dado%2)==0){
        echo "Es par<br>";
        $par ++;
    }else{
        echo "Es impar<br>";
        $impar ++;
    };
    $i=$i+1;
}
 echo "<p>Cantidad total de pares: $par</p>";
 echo "<p>Cantidad total de impares: $impar</p>";

?>