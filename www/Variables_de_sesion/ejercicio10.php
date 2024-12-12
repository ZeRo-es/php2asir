<?php
session_start();
if (!isset($_SESSION["casilla"])) {
    $_SESSION["casilla"]=[0,0,0,0,0,0,0,0];
    $_SESSION["posicion"]=0;
}
if(isset($_POST["izquierda"])){
    if ($_SESSION["posicion"]>0) {
        $_SESSION["casilla"][$_SESSION["posicion"]]=0;
        $_SESSION["posicion"]-=1;
        $_SESSION["casilla"][$_SESSION["posicion"]]=1;
        echo"<----";
    }else {
        echo "No puede ir más a la izquierda";
    }

}
if(isset($_POST["derecha"])){
    if ($_SESSION["posicion"]<7) {
        $_SESSION["casilla"][$_SESSION["posicion"]]=0;
        $_SESSION["posicion"]+=1;
        $_SESSION["casilla"][$_SESSION["posicion"]]=1;
        echo "---->";
    }else {
        echo "No puede ir más a la derecha";
    }

}
if (isset($_POST["borrar"])) {
    $_SESSION=[];
}


?>
<style>
table, th, td {
  border: 1px solid;
  padding: 5px;
}
</style>
<form action="" method="post">
<input type="submit" name="izquierda" value="izquierda">
<input type="submit" name="derecha" value="derecha">
<input type="submit" name="borrar" value="borrar">
</form>

<table>
    <tr>
        <?php
        for ($i=0; $i <= 7; $i++) { 
           echo "<td>$i</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        for ($i=0; $i < count($_SESSION["casilla"]); $i++) { 
            if ($_SESSION["casilla"][$i] == 1) {
                echo "<td>X</td>";
            }else {
                echo "<td></td>";
            }
        }
        ?>
    </tr>
</table>