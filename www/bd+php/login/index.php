<?php
    include "conexion.php";
?>
<form action='register.php' method='post'><input type='submit' value='Crear usuario'></form>
<?php
    echo "<table border='1' solid;black;>";
    echo "<tr>";
    echo "<th>nombre</th>";
    echo "<th>email</th>";
    echo "<th>password</th>";
    echo "</tr>";
    $sql = "select * from usuarios
    ";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();
    while($fila = $sentencia -> fetch()){ //vamos recorriendo fila a fila
   
    echo "<tr>";
    echo "<td>" . $fila["nombre"] . "<br/></td>";
    echo "<td>" . $fila["email"] . "<br/></td>";
    echo "<tr>";
    }
?>
