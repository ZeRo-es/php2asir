<?php
include('bd.php');

if(isset($_POST["boton"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    if ($email == $email1 & $pass == $pass1){
        echo "a";
    }elseif ($email2 == $email & $pass2 == $pass) {
        header('Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ ');
    }else{
        echo"Contraseña incorrecta";
    }
}
?>