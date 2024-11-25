<?php
$tiempo=rand(0, 15);
$horas=rand(1,2);
$dia=rand(1, 7);
    echo 'Duracion de la llamda:' . $tiempo . 'minutos';
    if($horas==1){
        echo 'Es por la mañana';
    }
    else{
        echo 'Es por al tarde';
    }
    if($dia==7){
        if($tiempo<6){
            echo 'La llamda cuesta 1,03€';

        }else if($tiempo<9){
            echo 'La llamda cuesta 1,88€';

        }else if($tiempo<11){
            echo 'La llamda cuesta 2,18€';

        }else{
            echo 'La llamda cuesta 3,13€';
        }
    }
    else{
        if($horas==1){
            if($tiempo<6){
                echo 'La llamda cuesta 1,15€';

            }else if($tiempo<9){
                echo 'La llamda cuesta 1,95€';

            }else if($tiempo<11){
                echo 'La llamda cuesta 2,20€';

            }else{
                echo 'La llamda cuesta 3,15€';
            }
        }

        if($horas==2){
            if($tiempo<6){
                echo 'La llamda cuesta 1,10€';

            }else if($tiempo<9){
                echo 'La llamda cuesta 1,90€';

            }else if($tiempo<11){
                echo 'La llamda cuesta 2,15€';

            }else{
                echo 'La llamda cuesta 3,10€';
            }
        }
    }
?>