<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Estilizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        br {
            clear: both;
        }

        h2 {
            clear: both;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            clear: both;
        }

        .verde {
            font-weight: bold;
            color: green;
        }

        .rojo {
            font-weight: bold;
            color: red;
        }

        .lunes {
            color: blue;
        }

        .martes {
            color: orange;
        }

        .miercoles {
            color: yellow;
        }

        .jueves {
            color: green;
        }

        .viernes {
            color: red;
        }

        .sabado {
            color: black;
        }

        .domingo {
            color: brown;
        }
        div.bolas{
            width: 70px;
            height: 70px;
            border-radius:50%;
            background-color: black;
        } 

        img {
            width: 150px;
            height: 150px;
            float: left;
        }
    </style>
    <h1>Resultado PHP</h1>
</head>

<body>
    <?php
    //// ---------EJERCICIOS 1-2 ---------------------
    //$nombre = "Luis";
    //echo "<p>Hola Mundo</p>";
    //echo "<p>Nombre de alumno: <span class='verde'>$nombre</span></p>";
    //$nota = 6;
    //if ($nota >= 5) {
    //    echo "<p class='verde'>Aprobado</p>";
    //} else {
    //    echo "<p class='rojo'>No aprobado</p>";
    //}
    //// ------------EJERCICIO 3-------------------
    //$moneda = rand(0, 1);
    //echo "<h2>Moneda:</h2>";
    //if ($moneda == 0) {
    //    echo '<img src="./imagenes moneda/cruz.jpg" alt="" srcset="">';
    //} else {
    //    echo '<img src="./imagenes moneda/cara.jpg" alt="" srcset="">';
    //}
    //// -----------EJERCICIO 4--------------------
    //$dia = rand(1, 7);
    //echo "<br>";
    //echo "<h2>Día de la semana:</h2>";
    //if ($dia == 1) {
    //    echo "<p class='lunes'>Lunes</p>";
    //} else if ($dia == 2) {
    //    echo "<p class='martes'>Martes</p>";
    //} else if ($dia == 3) {
    //    echo "<p class='miercoles'>Miércoles</p>";
    //} else if ($dia == 4) {
    //    echo "<p class='jueves'>Jueves</p>";
    //} else if ($dia == 5) {
    //    echo "<p class='viernes'>Viernes</p>";
    //} else if ($dia == 6) {
    //    echo "<p class='sabado'>Sábado</p>";
    //} else {
    //    echo "<p class='domingo'>Domingo</p>";
    //}
    //// --------------EJERCICIO 5-----------------
    //$dado = rand(1, 6);
    //echo "<h2>Dado:</h2>";
    //if ($dado == 1) {
    //    echo '<img src="./imagenes moneda/dado1.png" alt="" srcset="">';
    //    echo "<p>womp womp</p>";
    //} else if ($dado == 2) {
    //    echo '<img src="./imagenes moneda/dado2.png" alt="" srcset="">';
    //} else if ($dado == 3) {
    //    echo '<img src="./imagenes moneda/dado3.png" alt="" srcset="">';
    //} else if ($dado == 4) {
    //    echo '<img src="./imagenes moneda/dado4.png" alt="" srcset="">';
    //} else if ($dado == 5) {
    //    echo '<img src="./imagenes moneda/dado5.png" alt="" srcset="">';
    //} else {
    //    echo '<img src="./imagenes moneda/dado6.png" alt="" srcset="">';
    //    echo "<p>SHEEEEESH</p>";
    //}
    //// ------------EJERCICIO 6-------------------
    //$dado2 = rand(1, 6);
    //$dado3 = rand(1, 6);
    //$sumadado = $dado2 + $dado3;
    //echo "<h2>2 Dados:</h2>";
    //echo "<br>";
    //echo "<img src='./imagenes moneda/dado$dado2.png'>";
    //echo "<img src='./imagenes moneda/dado$dado3.png'>";
    //echo "<p>El resultado es: $sumadado</p>";
    //// ------------EJERCICIO7--------------------
    //echo "<h2>Cajas</h2>";
    //$caja1 = rand(1, 5);
    //$caja2 = rand(1, 5);
    //$caja3 = 0;
    //echo "<p>caja1= $caja1 caja2= $caja2</p>";
    //$caja0 = $caja1;
    //$caja1 = $caja2;
    //$caja2 = $caja0;
    //echo "<p>caja1= $caja1 caja2= $caja2</p>";
    //// ------------EJERCICIO 8 --------------
    //$nota12 = rand(10, 100) / 10;
    //echo "<h2>Nota de alumno: $nota12</h2>";
    //if ($nota12 <= 4) {
    //    echo "<p>insuficiente</p>";
    //} elseif ($nota12 >= 5 && $nota12 <= 6) {
    //    echo "<p>suficiente</p>";
    //} elseif ($nota12 >= 6 && $nota12 <= 7) {
    //    echo "<p>bien</p>";
    //} elseif ($nota12 > 6 && $nota12 <= 8) {
    //    echo "Notable";
    //} else {
    //    echo "Sobresaliente";
    //}
    //// ------------EJERCICIO 9 ---------------
    //$grados = rand(-15, 40);
    //echo "<h2>Temperatura: $grados</h2>";
    //if ($grados < 0 or $grados > 30) {
    //    echo "<p>insoportable</p>";
    //} elseif ($grados >= 0 && $grados < 10) {
    //    echo "<p>hace frio</p>";
    //} elseif ($grados >= 10 && $grados < 20) {
    //    echo "<p>hace fresquito</p>";
    //} else {
    //    echo "se está bien";
    //}
    //// ------------EJERCICIO 10 -------------
    //$hora = date('G');
    //echo "<h2>Hora: $hora</h2>";
    //if ($hora >= 6 && $hora <= 12) {
    //    echo "<p>Buenos Días</p>";
    //} elseif ($hora >= 13 && $grados <= 20) {
    //    echo "<p>Buenas Tardes</p>";
    //} else {
    //    echo "Buenas Noches";
    //}
    //// ----------- EJERCICIO 11 --------------
    //$nume = rand(1, 20);
    //$nume1 = $nume % 2;
    //echo "<h2>El numero : $nume </h2>";
    //if ($nume1 == 1) {
    //    echo "<p>Es impar</p>";
    //} else {
    //    echo "<p>Es par</p>";
    //}
    //// ------------- EJERCICIO 12 ------------
    //echo "<h2>Número mayor: </h2>";
    //$a = rand(1, 10);
    //echo "<h2>$a</h2>";
    //$b = rand(1, 10);
    //echo "<h2>$b</h2>";
    //$c = rand(1, 10);
    //echo "<h2>$c</h2>";
    //if ($a == $b && $a >= $c) {
    //    echo "<p>A y B son iguales y mayores</p>";
    //} elseif ($b == $c && $b >= $a) {
    //    echo "<p>B y C son iguales y mayores</p>";
    //} elseif ($a == $c && $a >= $b) {
    //    echo "<p>A y C son iguales y mayores</p>";
    //} elseif ($a >= $b && $a >= $c) {
    //    echo "<p>A es mayor</p>";
    //} elseif ($a <= $b && $b >= $c) {
    //    echo "<p>B es mayor</p>";
    //} elseif ($a <= $c && $b <= $c) {
    //    echo "<p>C es mayor</p>";
    //} else {
    //    echo "<p>todos son iguales</p>";
    //}
    //// ------------- EJERCICIO 13 ------------     
    //
    //$alumnos = rand(0, 120);
    //echo "<h2> Alumnos:</h2>";
    //if ($alumnos >= 100) {
    //    $costo1 = 65;
    //    $total1 = $alumnos * $costo1;
    //    echo "<p> El costo es '$total1'€ por $alumnos alumnos</p>";
    //} elseif ($alumnos <= 99 && $alumnos >= 50) {
    //    $costo2 = 70;
    //    $total2 = $alumnos * $costo2;
    //    echo "<p>El costo es '$total2'€ por $alumnos alumnos</p>";
    //} elseif ($alumnos <= 49 && $alumnos >= 30) {
    //    $costo3 = 95;
    //    $total3 = $alumnos * $costo3;
    //    echo "<p>El costo es '$total3'€ por $alumnos alumnos</p>";
    //} else {
    //    $pagan = 4000 / $alumnos;
    //    echo "El costo es 4000€ y cada alumno debe pagar $pagan";
    //}
    //// --------------EJERCICIO 14----------
    //$minutos = rand(1, 120);
    //$hora = rand(0, 23);
    //$diasem = rand(1, 7);
    //
    //echo "<h2> Llamadas:</h2>";
//
    //if ($minutos <= 5) {
    //    $costomin = 1;
    //} elseif ($minutos > 5 && $alumnos <= 8) {
    //    $costomin = 1.8;
    //} elseif ($minutos > 8 && $minutos <= 9) {
    //    $costomin = 2.5;
    //} else {
    //    $costomin = 3.00;
    //}
//
    //if ($diasem == 7) {
    //    echo "<p>Es Domingo</p>";
    //    $costoturno = 0.03;
    //} else {
    //    echo "<p>No es Domingo</p>";
    //    if ($hora > 6 && $hora < 12) {
    //        echo "<p>Es turno Mañana</p>";
    //        $costoturno = 0.15;
    //    } else {
    //        echo "<p>Es turno tarde/noche</p>";
    //        $costoturno = 0.10;
    //    }
    //}
    //$ope1 = $costoturno * $costomin;
    //$ope3 = $costomin + $ope1;
    //echo "<p>El importe por turno es de: $ope1 €, el importe por minutos es de $costomin €</p>";
    //echo "<p>La llamada duró un total de $minutos minutos y el precio total de la llamada sería : $ope3 €</p>";
    //// -----------------------EJEMPLO BUCLES----------------------
    //echo "<h2>Bucles par/impar: </h2>";
    //$i = 0;
    //while ($i <= 10){
    //    if (($i%2==0)){
    //        echo "$i es par<br>";
    //    }else{
    //        echo "$i es impar<br>";
    //    }
    //    $i=$i+1;
    //}
    ////----------TABLA--------------
    //echo "<h2>Tabla del 5: </h2>";
    //$i = 0;
    //while ($i <= 10){
    //    $mul=$i*5;
    //    echo "$i * 5 = $mul<br>";
    //    $i=$i+1;
    //}
//
    ////---------------DADOS-------------------
//
    //echo "<h2>Dados: </h2>";
    //$dadobuc = rand(1,10);
    //$i = 1;
    //$max = 0;
    //$min = 6;
    //if ($dadobuc == 1) {
    //    echo "<p>Tienes $dadobuc Dado </p>";
    //} else {
    //    echo "<p>Tienes $dadobuc Dados</p>";
    //};
    //while ($i <= $dadobuc){
    //    $dado = rand(1, 6);
    //    echo  "<img src='./imagenes moneda/dado$dado.png'>";
    //    if ($dado > $max) {
    //        $max = $dado;
    //    };
    //    if ($dado <= $min) {
    //        $min = $dado;
    //    };
    //    $i=$i+1;
    //}
    //echo "<p>El número $min es el minimo</p>";
    //echo "<p>El número $max es el máximo</p>";
//
    ////------------DESCEN----------------
//
    //echo "<h2>Descendiente: </h2>";
    //$i = 10;
    //while ($i >=0){
    //    echo "$i<br>";
    //    $i=$i-1;
    //}
//
    ////-----------DADOS PAR/IMPAR-----------
//
    //echo "<h2>Dados par/impar: </h2>";
    //$i = 1;
    //$par=0;
    //$impares=0;
    //while ($i <= 7){
    //    $dados = rand(1, 6);
    //    echo  "<img src='./imagenes moneda/dado$dados.png'>";
    //    if (($dados%2==0)){
    //        echo "<p>El dado $i es par</p>";
    //        $par ++;        
    //    }else{
    //        echo "<p>El dado $i es impar</p>";
    //        $impares ++;
    //    }
    // 
    //    $i=$i+1;
    //}
    //echo "<p>El numero total de pares: $par</p>";
    //echo "<p>El numero total de impares: $impares</p>";
    //
    ////-----------DADOS 2/3-----------
//
    //echo "<h2>Dados 2/3: </h2>";
    //$i = 1;
    //$dos=0;
    //$tres=0;
    //while ($i <= 12){
    //    $dados = rand(1, 6);
    //    echo  "<img src='./imagenes moneda/dado$dados.png'>";
    //    if ($dados==2){
    //        echo "<p>Un 2!!!</p>";
    //        $dos ++;        
    //    }elseif ($dados == 3){
    //        echo "<p>Un 3!!!</p>";
    //        $tres ++;
    //    }else{
    //        echo"<br>";
    //    }
    // 
    //    $i=$i+1;
    //}
    //echo "<p>El numero total de 2: $dos</p>";
    //echo "<p>El numero total de 3: $tres</p>";
    //-----------Media alumnos notas-----------
    //echo "<h2>Notas: </h2>";
    //$i = 1;
    //$cont=0;
    //while ($i < 24){
    //    $notas = rand(1*10, 10*10)/10;
    //    $cont=$cont+$notas;
    //    $i=$i+1;
    //}
    //$media=$cont/24;
    //echo "<p>Numero total de alumnos: $i</p>";
    //echo "<p>La suma de notas: $cont</p>";
    //echo "<p>La media de notas es: $media</p>";

    //-----------COLORES----------------

    //echo "<h2>Fade: </h2>";
    //$i = 0;
    //while ($i <255){
    //    $y=$i+5;
    //    echo "<div style='background-color:rgb($i,0,0); width:$y%'>RGB</div>";
    //    $i=$i+20;
    //    
    //}
    // ---------------TABLAS FILAS---------------------------
    //echo "<table border='3'>";
//
    //        for ($i=0;$i<=10;$i++) {        
    //            echo "<tr>";
    //            echo "<td>";
    //            echo "$i";
    //            echo "</td>";        
    //            echo "</tr>";
    //        }
//
    //echo "</table>";
    //// ---------------TABLAS COLUMNAS---------------------------
    //    echo "<table border='4'>";
    //    echo "<tr>";
    //    for ($i=0;$i<=10;$i++) {        
   //
    //        echo "<td>";
    //        echo "$i";
    //        echo "</td>";        
//
    //    }            
    //    echo "</tr>";
    //echo "</table>";
    //// ---------------TABLAS PARES---------------------------
    //echo "<table border='4'>";
    //echo "<tr>";
    //for ($i=0;$i<=100;$i+=2) {        
//
    //    echo "<td>";
    //    echo "$i";
    //    echo "</td>";        
//
    //}            
    //echo "</tr>";
    //echo "</table>";
    // ---------------BOLAS---------------------------
    //$numbolas=rand(1,10);
    //for ($i=1;$i<=$numbolas;$i++){
    //    echo"<div class='bolas'>";
    //    echo"</div class='bolas'>";
    //}
    //// ---------------BOLAS COLOR---------------------------
    //$red=rand(1,255);
    //$green=rand(1,255);
    //$blue=rand(1,255);
    //$numbolas=rand(1,10);
    //for ($i=1;$i<=$numbolas;$i++){
    //    echo"<div style= 'width: 70px; height: 70px; border-radius:50%; background-color:RGB($red $green $blue)'>";
    //    echo"</div>";
    //}
    // ---------------TABLAS multiplicar---------------------------
    //echo "<table border='3'>";
    //$num=rand(1,12);
    //        for ($i=0;$i<=12;$i++) {
    //            $mult=$i*$num;        
    //            echo "<tr>";
    //            echo "<td>";
    //            echo "$i*$num = $mult";
    //            echo "</td>";        
    //            echo "</tr>";
    //        }
    //echo "</table>";
    //---------------------EJERCICIO DADOS TOTAL ---------------
    //echo "<h2>Dados: </h2>";
    //$dadobuc = rand(1,10);
    //$i = 1;
    //$max = 0;
    //$contador = 0;
    //if ($dadobuc == 1) {
    //    echo "<p>Tienes $dadobuc Dado </p>";
    //} else {
    //    echo "<p>Tienes $dadobuc Dados</p>";
    //};
    //while ($i <= $dadobuc){
    //    $dado = rand(1, 6);
    //    echo  "<img src='./imagenes moneda/dado$dado.png'>";
    //    if ($max == $dado){
    //        $contador++;
    //    }
    //    if ($dado > $max) {
    //        $max = $dado;
    //        $contador = 1;
    //    };
    //    $i=$i+1;
    //}
    //echo "<p>El número $max es el máximo</p>";
    //echo "<p>Aparece $contador veces</p>";
    //--------dados total--------------
    //echo "<h2>Dados: </h2>";
    //$dadobuc = rand(1,10);
    //$i = 1;
    //$total = 0;
    //if ($dadobuc == 1) {
    //    echo "<p>Tienes $dadobuc Dado </p>";
    //} else {
    //    echo "<p>Tienes $dadobuc Dados</p>";
    //};
    //while ($i <= $dadobuc){
    //    $dado = rand(1, 6);
    //    echo  "<img src='./imagenes moneda/dado$dado.png'>";
    //    $i=$i+1;
    //    $total = $total+$dado;
    //}
    //echo "<p> La suma es: $total";
    //-------------------FORMULARIOS--------------------
    // Función recursiva para mostrar el contenido de un directorio
    function mostrar_directorio($directorio) {
        // Verificamos si el directorio existe
        if (!is_dir($directorio)) {
            echo "El directorio no existe.";
            return;
        }

        // Obtenemos el contenido del directorio
        $contenido = scandir($directorio);

        echo "<h2>Contenido de: $directorio</h2>";
        echo "<ul>";

        foreach ($contenido as $archivo) {
            // Filtramos las entradas "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio, creamos un enlace para navegar
                if (is_dir($directorio . '/' . $archivo)) {
                    echo "<li><a href='?dir=" . urlencode($directorio . '/' . $archivo) . "'>[Carpeta] $archivo</a></li>";
                } else {
                    // Si es un archivo, lo mostramos como enlace
                    echo "<li><a href='$directorio/$archivo'>$archivo</a></li>";
                }
            }
        }

        echo "</ul>";
    }

    // Definimos el directorio raíz, que puede ser pasado a través de la URL con el parámetro "dir"
    $directorio_raiz = isset($_GET['dir']) ? $_GET['dir'] : ".";

    // Llamamos a la función para mostrar el contenido del directorio
    mostrar_directorio($directorio_raiz);
    
    ?>


</body>

</html>