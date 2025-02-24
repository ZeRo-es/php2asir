<?php
if (isset($_POST["enviar"])) {

    if (empty($_POST["numCarta"])) {   // si no has introducimos ningún "numCarta" (vacio) entra y muestra el mensaje

        echo "<h1>NO has introducido ningún número</h1>";

    } else {

        $jugador1 = [];  //creamos los array 
        $jugador2 = [];
        $ganaJugador1 = 0;  //inicializamos contadores
        $ganaJugador2 = 0;

        for ($i = 0; $i < $_POST["numCarta"]; $i++) {   //rellenamos arrays de números

            $jugador1[] = rand(1, 12);
            $jugador2[] = rand(1, 12);

        }
        echo "JUGADOR 1  ------- JUGADOR 2<br>";
        for ($i = 0; $i < $_POST["numCarta"]; $i++) {   //mostramos las cartas

            echo "<img src='./images/{$jugador1[$i]}.svg' width='100px'>";
            echo "<img src='./images/{$jugador2[$i]}.svg' width='100px'>";
            echo "<br>";
        }


        for ($i = 0; $i < $_POST["numCarta"]; $i++) {   //recorre el array 
            if ($jugador1[$i] > $jugador2[$i]) {   //si el valore de jugador1 es más grande que jugador2, gana jugador1 y se incrementa.
                $ganaJugador1++;
                echo "Gana Jugador 1 esta mano.";
            }
            if ($jugador1[$i] < $jugador2[$i]) {  //si el valore de jugador2 es más grande que jugador1, gana jugador2 y se incrementa.
                $ganaJugador2++;
                echo "Gana Jugador 2 esta mano.";
            }  

            //podríamos poner empate si quisieramos pero el ejercicio se pide que no se registre

            echo " el jugador1 tiene $ganaJugador1 y el jugador2 tiene $ganaJugador2 <br>";
        }



        if ($ganaJugador1 > $ganaJugador2) {   //comprueba el total de puntos sumados
            echo "GANA EL JUGADOR 1";
        } elseif ($ganaJugador2 > $ganaJugador1) {
            echo "GANA EL JUGADOR 2";
        } else {
            echo "EMPATE";
        }


    }


}

?>

<form action="" method="post">
    <input type="text" name="numCarta" id="">
    <input type="submit" name="enviar">
</form>