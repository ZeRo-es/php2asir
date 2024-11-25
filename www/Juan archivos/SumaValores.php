<?php
        $numero=rand(1,6);
        echo 'PrimerDado:';
        if($numero==1){
            echo '1';

        }else if($numero==2){
            echo '2';

        }else if($numero==3){
            echo '3';

        }else if($numero==4){
            echo '4';

        }else if($numero==5){
            echo '5';

        }else{
            echo '6';
        }

//////
        $numero2=rand(1,6);
        echo 'SegundoDado:';
        if($numero2==1){
            echo '1';

        }else if($numero2==2){
            echo '2';

        }else if($numero2==3){
            echo '3';

        }else if($numero2==4){
            echo '4';

        }else if($numero2==5){
            echo '5';

        }else{
            echo '6';
        }

        $total=$numero+$numero2;
        echo 'DadoFinal:';
        echo $total;
?>