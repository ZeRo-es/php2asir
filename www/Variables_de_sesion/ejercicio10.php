<?php
session_start();
if(!isset($_SESSION["top"])){
    $_SESSION["top"]=[];
    $_SESSION["left"]=[];
}

if (isset($_POST["boton"])) {  
    if ($_POST["boton"] == "AI") { 
        $_SESSION["top"][] = rand(0, 100);
        $_SESSION["left"][] = rand(0, 100);
    }

    if ($_POST["boton"] == "ABI") {
            $_SESSION["top"][] = rand(100, 200);
            $_SESSION["left"][] = rand(0, 100);
    }

    if ($_POST["boton"] == "AD") {
            $_SESSION["top"][] = rand(0, 100);
            $_SESSION["left"][] = rand(100, 200);
    }

    if ($_POST["boton"] == "ABD") {
            $_SESSION["top"][] = rand(100, 200);
            $_SESSION["left"][] = rand(100, 200);
    }
    for ($i = 0; $i < count($_SESSION["top"]); $i++) { 
        echo "<div style='background-color:red; margin-top:50px;position:absolute;border-radius:50%;height:10px;width:10px;left:{$_SESSION['left'][$i]}px;top:{$_SESSION['top'][$i]}px'></div>";
    }
}
if(($_POST["boton"] == "borrar")){
    $_SESSION=[];
}
?>

<form action="" method="post">
    <input type="submit" name="boton"  value="AI"></input>
    <input type="submit" name="boton"  value="AD"></input>
    <input type="submit" name="boton"  value="ABI"></input>
    <input type="submit" name="boton"  value="ABD"></input>
    <input type="submit" name="boton"  value="borrar"></input>
</form>