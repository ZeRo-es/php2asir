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
      echo "<th>Editar</th>";
      echo "</tr>";
    $sql = "SELECT * FROM usuariosig JOIN postsig ON usuariosig.id=postsig.id_usuario";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    while($fila = $sentencia -> fetch()){ //vamos recorriendo fila a fila
      echo "<tr>";
      echo "<td>" . $fila["mensaje"] . "<br/></td>";
      echo "<td> <img src= './fotospost/{$fila["foto"]}' width='100px'><br/></td>";
      echo "<td>" . $fila["fecha"] . "<br/></td>";
      echo "<td>" . $fila["user"] . "<br/></td>";

    if ( $_SESSION["rol"]=="ROLE_ADMIN") {
        echo "<td> <form action='./borrar.php' method='post'>
        <button type='submit' name='borrar' value=$fila[id]>borrar</button>  
        </form></td>";
        echo "<td> <form action='./editar.php' method='post'>
        <button type='submit' name='editar' value=$fila[id]>editar</button>  
        </form></td>";
        
    }else {
      if ($_SESSION["nombre"]==$fila["user"]) {
          echo "<td> <form action='./borrar.php' method='post'>
          <button type='submit' name='borrar' value='{$fila['id']}'>borrar</button>  
          </form></td>";
      }else {
        ;
      }
    }
      echo "<tr>";
    }
    print_r(value: $_SESSION);
?>
<?php

    if (isset($_POST["mensaje"]) && isset($_FILES["fotopost"])) {
        $fotopost = $_FILES['fotopost']['name'];
        $dir_subida = './fotospost/';
        $fichero_subido = $dir_subida . basename($_FILES['fotopost']['name']);
    
        move_uploaded_file($_FILES['fotopost']['tmp_name'], $fichero_subido);
        $id=$_SESSION["id"];
        $mensaje = $_POST["mensaje"] ;         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
        $fotopost = $_FILES['fotopost']['name'] ;
        

        $sql = "INSERT INTO postsig(mensaje,foto,id_usuario) VALUES (:mensaje,:foto,:idValor)";
        
        $sentencia = $conexion -> prepare($sql);
        $sentencia->bindParam(":mensaje", $mensaje);
        $sentencia->bindParam(":foto", $fotopost);
        $sentencia->bindParam(":idValor", $id);
        $isOk = $sentencia -> execute();
        $idGenerado = $conexion->lastInsertId();
        echo $idGenerado;
        header("Location: ./index.php");
    }
?>   
<form action='./logout.php' method='post'><input type='submit' value='Cerrar sesión'><br><br></form>

<form action="" method="post" enctype="multipart/form-data">
<fieldset>
  <legend>Post:</legend>
  <input type="text" name="mensaje" placeholder="Mensaje" required><br><br>

    Enviar este Fichero: <input type="file" name="fotopost" id="imagen" required></input><br><br>
    
    <input type="submit" name="postear" value="Postear"><br>
    </form>
 </fieldset>