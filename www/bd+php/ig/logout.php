<?php
    include "conexion.php";
    session_start();
    $_SESSION=[];
    header("Location: ./login.php")
?>