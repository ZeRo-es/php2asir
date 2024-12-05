<?php
$liebre=15;
$t = 15;

while ($t >= 0 && $liebre !=0) {
    $liebre=rand(0,15);
    echo "El puesto de la tortuga es $t y el puesto de la liebre es $liebre<br>";
    $t--;
}
if ($liebre==0){
    echo "<p>Gano la liebre</p";
}else {
    echo "Gano la tortuga";
}

?>