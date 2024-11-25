<?php
// Hacerlo sin ninguna funciones axuliares

// Crear dos entrenadores con 10 Pokémon cada uno
$entrenador1 = [];
$entrenador2 = [];

// Generar las fuerzas aleatorias de los Pokémon de cada entrenador
for ($i = 0; $i < 10; $i++) {
    $entrenador1[] = rand(1, 99);  // Fuerza aleatoria entre 1 y 99 para el entrenador 1
    $entrenador2[] = rand(1, 99);  // Fuerza aleatoria entre 1 y 99 para el entrenador 2
}

// Mostrar las fuerzas iniciales de los Pokémon de cada entrenador (sin usar implode)
echo "Entrenador 1: ";
for ($i = 0; $i < 10; $i++) {
    echo $entrenador1[$i];
    if ($i < 9) {
        echo ", ";
    }
}
echo "<br>";

echo "Entrenador 2: ";
for ($i = 0; $i < 10; $i++) {
    echo $entrenador2[$i];
    if ($i < 9) {
        echo ", ";
    }
}
echo "<br>";

$puntosEntrenador1 = 0;
$puntosEntrenador2 = 0;

// Realizar las batallas
for ($i = 0; $i < 10; $i++) {
    // Buscar el índice del Pokémon más fuerte de cada entrenador
    $pokemon1 = -1;
    $pokemon2 = -1;
    $indicePokemon1 = -1;
    $indicePokemon2 = -1;

    // Buscar el Pokémon más fuerte del entrenador 1
    for ($j = 0; $j < 10; $j++) {
        if ($entrenador1[$j] > $pokemon1) {
            $pokemon1 = $entrenador1[$j];
            $indicePokemon1 = $j;
        }
    }

    // Buscar el Pokémon más fuerte del entrenador 2
    for ($j = 0; $j < 10; $j++) {
        if ($entrenador2[$j] > $pokemon2) {
            $pokemon2 = $entrenador2[$j];
            $indicePokemon2 = $j;
        }
    }

    // Batalla entre los dos Pokémon más fuertes
    if ($pokemon1 > $pokemon2) {
        $puntosEntrenador1++;  // El entrenador 1 gana
    } elseif ($pokemon1 < $pokemon2) {
        $puntosEntrenador2++;  // El entrenador 2 gana
    } else {
        // Empate, ambos ganan un punto
        $puntosEntrenador1++;
        $puntosEntrenador2++;
    }

    // Marcar los Pokémon como descansando (asignamos -1)
    $entrenador1[$indicePokemon1] = -1;
    $entrenador2[$indicePokemon2] = -1;
}

echo "<br>";

// Mostrar los resultados
echo "Resultado final:<br>";
echo "Entrenador 1: $puntosEntrenador1 puntos<br>";
echo "Entrenador 2: $puntosEntrenador2 puntos<br>";

echo "<br>";

// Determinar el ganador
if ($puntosEntrenador1 > $puntosEntrenador2) {
    echo "¡El Entrenador 1 gana!<br>";
} elseif ($puntosEntrenador1 < $puntosEntrenador2) {
    echo "¡El Entrenador 2 gana!<br>";
} else {
    echo "¡Empate entre los dos entrenadores!<br>";
}

















/*
// Crear dos entrenadores con 10 Pokémon cada uno
$entrenador1 = [];
$entrenador2 = [];

// Generar las fuerzas aleatorias de los Pokémon de cada entrenador
for ($i = 0; $i < 10; $i++) {
    $entrenador1[] = rand(1, 99);  // Fuerza aleatoria entre 1 y 99 para el entrenador 1
    $entrenador2[] = rand(1, 99);  // Fuerza aleatoria entre 1 y 99 para el entrenador 2
}

// Mostrar las fuerzas iniciales de los Pokémon de cada entrenador
echo "Entrenador 1: " . implode(", ", $entrenador1) . "<br>";
echo "Entrenador 2: " . implode(", ", $entrenador2) . "<br>";

echo "<br>";

$puntosEntrenador1 = 0;
$puntosEntrenador2 = 0;

// Realizar las batallas
for ($i = 0; $i < 10; $i++) {
    // Encontrar el Pokémon más fuerte (el máximo valor) para cada entrenador
    $pokemon1 = max($entrenador1);
    $pokemon2 = max($entrenador2);

    // Batalla entre los dos Pokémon más fuertes
    if ($pokemon1 > $pokemon2) {
        $puntosEntrenador1++;  // El entrenador 1 gana
    } elseif ($pokemon1 < $pokemon2) {
        $puntosEntrenador2++;  // El entrenador 2 gana
    } else {
        // Empate, ambos ganan un punto
        $puntosEntrenador1++;
        $puntosEntrenador2++;
    }

    // Marcar los Pokémon como descansando (asignamos -1)
    $indicePokemon1 = array_search($pokemon1, $entrenador1);
    $indicePokemon2 = array_search($pokemon2, $entrenador2);
    
    $entrenador1[$indicePokemon1] = -1;
    $entrenador2[$indicePokemon2] = -1;
}

// Mostrar los resultados
echo "Resultado final:<br>";
echo "Entrenador 1: $puntosEntrenador1 puntos<br>";
echo "Entrenador 2: $puntosEntrenador2 puntos<br>";

echo "<br>";

// Determinar el ganador
if ($puntosEntrenador1 > $puntosEntrenador2) {
    echo "¡El Entrenador 1 gana!<br>";
} elseif ($puntosEntrenador1 < $puntosEntrenador2) {
    echo "¡El Entrenador 2 gana!<br>";
} else {
    echo "¡Empate entre los dos entrenadores!<br>";
}

//////

sin funciones axuliares
// Función para generar un array de Pokémon con fuerza aleatoria
function generarPokemons($cantidad) {
    $pokemons = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $pokemons[] = rand(1, 99); // Fuerza aleatoria entre 1 y 99
    }
    return $pokemons;
}

// Función para realizar una batalla entre dos entrenadores
function realizarBatallas($entrenador1, $entrenador2) {
    $puntosEntrenador1 = 0;
    $puntosEntrenador2 = 0;

    for ($i = 0; $i < 10; $i++) {
        // El entrenador lanza su Pokémon más fuerte disponible
        $pokemon1 = max($entrenador1);
        $pokemon2 = max($entrenador2);

        // Batalla entre los dos Pokémon más fuertes
        if ($pokemon1 > $pokemon2) {
            $puntosEntrenador1++;
        } elseif ($pokemon1 < $pokemon2) {
            $puntosEntrenador2++;
        } else {
            // Empate, ambos ganan un punto
            $puntosEntrenador1++;
            $puntosEntrenador2++;
        }

        // Marcar los Pokémon como descansando (asignamos -1)
        $indicePokemon1 = array_search($pokemon1, $entrenador1);
        $indicePokemon2 = array_search($pokemon2, $entrenador2);
        
        $entrenador1[$indicePokemon1] = -1;
        $entrenador2[$indicePokemon2] = -1;
    }

    // Retornar los puntos de los entrenadores
    return [$puntosEntrenador1, $puntosEntrenador2];
}

// Crear dos entrenadores con 10 Pokémon cada uno
$entrenador1 = generarPokemons(10);
$entrenador2 = generarPokemons(10);

// Mostrar las fuerzas iniciales de los Pokémon de cada entrenador
echo "Pokemons de los entrenadores:";
echo "<br>Entrenador 1: " . implode(", ", $entrenador1) . "";
echo "<br>Entrenador 2: " . implode(", ", $entrenador2) . "";

// Realizar las batallas
list($puntosEntrenador1, $puntosEntrenador2) = realizarBatallas($entrenador1, $entrenador2);

// Mostrar los resultados
echo "<br><br>Resultado final:";
echo "<br>Entrenador 1: $puntosEntrenador1 puntos";
echo "<br>Entrenador 2: $puntosEntrenador2 puntos";

// Determinar el ganador
if ($puntosEntrenador1 > $puntosEntrenador2) {
    echo "<br><br>¡El Entrenador 1 gana!";
} elseif ($puntosEntrenador1 < $puntosEntrenador2) {
    echo "<br><br>¡El Entrenador 2 gana!";
} else {
    echo "<br><br>¡Empate entre los dos entrenadores!";
}
*/

?>