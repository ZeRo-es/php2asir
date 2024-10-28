<?php

$num=[];

for ($i=0; $i < 10; $i++) { 
    $num[]=rand(0,10);    
}
for ($i=0; $i < 10; $i++) { 
    echo "$num[$i]<br>";    
}


print_r($num)
?>