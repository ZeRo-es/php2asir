<form action="" method="post">
    <input type="number" name="num" required>
    <input type="submit" name="A" value="AI">
    <input type="submit" name="A" value="AD">
    <input type="submit" name="A" value="BI">
    <input type="submit" name="A" value="BD">
    <input type="submit" name="A" value="RAN">
</form>
<?php
    $num=$_POST["num"];
    $A=$_POST["AI"];
    for ($i=0; $i < $num; $i++) { 
        if ($A="AI") {
            $A=rand(0,100);
            echo "<div style='background-color:red;position:absolute;width:10px;height:10px;top:'$A'px;left:'$A'px;border-radius:50%'></div>";
        }
    }
?>