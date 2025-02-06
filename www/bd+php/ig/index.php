<?php
    ob_start();
    session_start();
    include "conexion.php";
    echo "<h2>Bienvenido $_SESSION[nombre] <img src= './fotosperfil/$_SESSION[fotoperfil]' width='100px'></h2>";
    echo "<table border='1' solid;black;>";
    echo "<tr>";
    echo "<th>Mensajes</th>";
    echo "<th>Fotos</th>";
    echo "<th>Fecha</th>";
    echo "<th>Usuario</th>";
    echo "<th>Borrar</th>";
    echo "</tr>";
    
?>

<form action='login.php' method='post'><input type='submit' value='Cerrar sesión'><br><br></form>

<form action="./postear.php" method="post">
<fieldset>
  <legend>Post:</legend>
  <input type="text" name="mensaje" placeholder="Mensaje" required><br><br>

    Enviar este Fichero: <input type="file" name="fotopost" id="imagen" required></input><br><br>
    
    <input type="submit" name="postear" value="Postear"><br>
    </form>
 </fieldset>