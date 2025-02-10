<?php
$numerobuc = rand(1,10);
$i = 1;
$max=0;
$contador=0;
$total=0;
if ($numerobuc == 1) {
    echo "<p>Tienes $numerobuc dado</p>";
} else {
    echo "<p>Tienes $numerobuc dados</p>";
};
while ($i <=$numerobuc) {
    $dado= rand(1,6);
    echo "<p>$dado</p>";
    echo "<br>";
    if ($dado == $max) {
        $contador++;
    }
    if ($max < $dado) {
        $max = $dado;
        $contador=1;
    };
    $i=$i+1;
    $total = $total+$dado;
}
        echo "<p>El $max es el nuemro mayor</p>";
        echo "<p>El total de veces que a salido es $contador</p>";
        echo "<p>El total es $total</p>";

?>