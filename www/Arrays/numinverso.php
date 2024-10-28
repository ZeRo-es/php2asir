<?php

$num=[];

for ($i=0; $i < 100; $i++) { 
    $num[]=rand(0,100);    
}
//for ($i=0; $i < 100; $i++) { 
//    echo "$num[$i]<br>";    
//}
for ($i=99; $i >=0; $i--) { 
    echo "$num[$i]<br>";    
}

print_r($num)
?>