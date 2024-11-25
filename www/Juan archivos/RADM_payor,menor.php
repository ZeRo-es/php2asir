<?php


$edades=[18,20,35,12,16,80];
$mayor=[];
$menor=[];

for ($i=0; $i < count($edades); $i++) {
    if ($edades[$i]>=18) {
        $mayor[]=$edades[$i];
    }
    else {
        $menor[]=$edades[$i];
    }
};

for ($i=0; $i < count($mayor); $i++) {
    echo "<p>Los mayores de edad son $mayor[$i]</p>";
};

for ($i=0; $i < count($menor); $i++) {
    echo "<p>Los menores de edad son $menor[$i]</p>";
};

?>