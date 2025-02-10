
<?php


if(isset($_POST["Enviar"])){
    $num=[];
    $min=500;
    $max=0;
    for ($i=0; $i < 5; $i++) { 
        $num[]=rand(1,500);
    }
    for ($i=0; $i < 5; $i++) { 
        echo "$num[$i]<br>";    
    }
    for ($i=0; $i < 5; $i++) { 
        echo "<div style= 'padding: 10px;  width: {$num[$i]}; border-radius: 100%; background-color: red'>";
        echo "<br>";
        echo "</div>";    
    }
    for($i=0;$i < count($num); $i++) {
        if ($num[$i] < $min) {
            $min = $num[$i];
        }
        if ($max < $num[$i]){
            $max = $num[$i];
        };
    }
    echo "El numero mayor es:" .$max;
    echo "<br> El numero menor es:" .$min;
}

?>
<form action="" method="post">
    <input type="submit" name="Enviar" value="Enviar">
</form>


