<?php

echo "<p>par</p>";
$i = 0;
while ($i <= 100) {
    echo $i;
    echo "<br>";
    $i=$i+2;
    ;
}
    echo "<p>impar</p>";
$i = 1;
while ($i <= 100) {
    echo $i;
    echo "<br>";
    $i=$i+2;
    ;
}

////////////7

$i = 0;
while ($i <= 100) {
    
    if (($i%2)==0){
        echo "$i es par<br>";
    }else{
        echo "$i es impar<br>";
    }

$i=$i+1;
}

?>