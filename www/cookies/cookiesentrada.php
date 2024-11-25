<?php
//setcookie("nombre", "Luis", time() + 15 );
//setcookie("color", "Azul", time() + 20 );
if(!isset($_COOKIE["entry"])){ //Si no existe la cookie, se creará
    setcookie("entry",0,time()+60);
}else{
    $entry=$_COOKIE["entry"]+1; //Suma una entrada para leer
    setcookie("entry",$entry);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div>Visitas:</div>
    <div><?php echo $_COOKIE["entry"]; ?></div>
</head>
<body>
    
</body>
</html>