

<form action="" method="post">
<input type="text" name="nombre" placeholder="Introduce nombre" required>
<input type="text" name="apellido" placeholder="Introduce apellido" required>

<input type="number" name="edad" placeholder="Edad" required>
<label>Sexo:</label>
<input type="radio" name="sexo" value="Masculino" required>
<label for="Masculino">M</label>
<input type="radio" name="sexo" value="Femenino" required>
<label for="Femenino">F</label>
<br>
<br>
<label for="color">Color:</label>
<input type="color" name="color" required>
<label>Acepta las condiciones de la web?</label>
<input type="checkbox" name="web" value="Si" >
<label> :Si</label>
<br>
<br>
<input type="submit" name="boton" value="Enviar" required>
</form>

<?php

if(isset($_POST["boton"])){
    if(isset($_POST["web"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $sexo=$_POST["sexo"];
        $color=$_POST["color"];
        $web=$_POST["web"];

        echo "<br>Mi nombre es {$nombre} {$apellido}, tengo {$edad} años, mi sexo es {$sexo} y mi color favorito es {$color}.";
    }else{
        echo "<p>Tiene que aceptar los términos y condiciones para continuar</p>";
    }
}

?>