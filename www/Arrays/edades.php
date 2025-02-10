<?php

$edades=[18,20,35,12,16,80,25,86,14,12,11,10];
$mayores=[];
$menores=[];

for ($i=0; $i < count($edades); $i++) { 
    if ($edades[$i]<18) {
        $menores[]=$edades[$i];
    }else {
        $mayores[]=$edades[$i];
    }
}

for ($i=0; $i < count($menores); $i++) { 
    echo "Menor: $menores[$i]<br>";
}
for ($i=0; $i < count($mayores); $i++) { 
    echo "Mayores: $mayores[$i]<br>";
}

print_r($mayores);
print_r($menores);

print_r($edades)
?>