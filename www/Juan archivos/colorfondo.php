<?php
$i = 255;
$y = 100;
while ($i && $y>= 0) {
    echo "<div style='background-color:rgb($i,0,0); width:$y%;'>a</div>";
    $i=$i-3;
    $y=$y-1;
}

?>