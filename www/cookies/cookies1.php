<?php
//setcookie("nombre", "Luis", time() + 15 );
//setcookie("color", "Azul", time() + 20 );
setcookie("fuente",50, time() + 40 );
setcookie("fondo","red",time()+40);

echo $_COOKIE["fuente"];
echo $_COOKIE["fondo"];

print_r($_COOKIE);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div {
            font-size: <?php echo $_COOKIE["fuente"]; ?>;
            background-color: <?php echo $_COOKIE["fondo"]; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div>Hola</div>
</head>
<body>
    
</body>
</html>