<?php

$num1=[];
$num2=[];

for ($i=0; $i < 10; $i++) { 
    $num1[]=rand(0,10);
}
for ($i=9; $i >= 0; $i--) { 
    $num2[]=$num1[$i];    
}
for ($i=0; $i < 10; $i++) { 
    echo "$num1[$i]<br>";    
}
echo "<br><br>";
for ($i=0; $i < 10; $i++) { 
    echo "$num2[$i]<br>";    
}



print_r($num1);
print_r($num2);
?>