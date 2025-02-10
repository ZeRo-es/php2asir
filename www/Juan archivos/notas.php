<?php
        $numero=rand(1,10);
        echo 'Nota:' . $numero;
        if($numero<5){
            echo 'Insuficiente';

        }else if($numero==5){
            echo 'Suficiente';

        }else if($numero==6){
            echo 'Bien';

        }else if(6<$numero && $numero<=8){
            echo 'Notable';

        }else{
            echo 'Sobresaliente';

        }

?>