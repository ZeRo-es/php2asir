<?php
    include "conexion.php";
?>
<form action='Crear.php' method='post'><input type='submit' value='Crear usuario'></form>
<?php
    echo "<table border='1' solid;black;>";
    echo "<tr>";
    echo "<th>nombre</th>";
    echo "<th>fecha</th>";
    echo "<th>numero</th>";
    echo "<th>editar</th>";
    echo "<th>borrar</th>";
    echo "</tr>";
    $sql = "select * from tabla2";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();
    while($fila = $sentencia -> fetch()){ //vamos recorriendo fila a fila
   
    echo "<tr>";
    echo "<td>" . $fila["nombre"] . "<br/></td>";
    echo "<td>" . $fila["fecha"] . "<br/></td>";
    echo "<td>" . $fila["numero"] . "<br/></td>";
    echo "<td> <form action='./editarbd.php' method='post'>
        <button type='submit' name='id' value='{$fila['id']}'>editar</button>  
    </form></td>";
    echo "<td>
    <form action='./borrardb.php' method='post'>
        <button type='submit' name='id' value='{$fila['id']}'>borrar</button>  
    </form>";
    echo "<tr>";
    }
?>
