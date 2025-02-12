<?php
    #Vaciamos la variable de sesión
    session_start();
    $_SESSION=[];
    header("Location: ./login.php")
?>