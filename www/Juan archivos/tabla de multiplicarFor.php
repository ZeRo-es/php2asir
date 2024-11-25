<?php
echo "<table border='1'>";
$numerobuc = rand(1,10);
for ($i=0;$i<=10;$i++){
    $mul=$i*5;
    echo "<tr>";
    echo "<td>";
    echo "$i * $numerobuc = $mul<br>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";


?>