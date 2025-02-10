<?php
$zapatillas=[];
for ($i=0; $i < 50; $i++) { 
    $zapatillas[]=rand(20,55);
}

for ($i=0; $i < 50; $i++) { 
    echo "<h2>".$zapatillas[$i]."</h2>";
}
?>