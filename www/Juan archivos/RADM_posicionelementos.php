<?php

// Crear un array con 50 elementos aleatorios entre 1 y 10
$num = [];
for ($i = 0; $i < 50; $i++) {
    $num[] = rand(1, 10);
}


// Inicializar un array para contar las ocurrencias
$conteo = [];

// Contar las veces que aparece cada elemento en el array
foreach ($num as $posi) {
    if (isset($conteo[$posi])) {
        $conteo[$posi]++; // Incrementar el contador si el elemento ya existe
    } else {
        $conteo[$posi] = 1; // Inicializar el contador si es la primera vez que aparece
    }
}

print_r($num);

echo "<br>Conteo de elementos:";
print_r($conteo);


/*
// Contar las veces que aparece cada elemento en el array
$conteo = array_count_values($num);
*/

?>