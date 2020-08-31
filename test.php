<?php
$txt = "СОЕВОЕ-МЯСО";
$txt = mb_strtolower($txt);
echo $txt;


/*
$y = $_POST["y"];
$x = $_POST["x"];
$result = $_POST["result"];


settype($i, int);
for ($i=$x; $i<$y;$i++){

    $result += $i;
}


?>
<form method="post">
Значение X<br>
    <input name="x" value="<?php echo $x;?>"><br>
    Значение Y<br>
    <input name="y" value="<?php echo $y;?>"><br>
    Результат:<br>
    <input name="result" value="<?php echo $result?>"><br><br>
    <input type="submit" value="Рассчитать">



<?php
/*$cost = $_POST["cost"];
$actual_cost = $_POST["actual_cost"];
$cost = str_replace(',', '.', $cost);
$actual_cost = str_replace(',', '.', $actual_cost);
if (is_numeric($cost) and is_numeric($actual_cost)){
$result = round((($cost-$actual_cost)/$cost)*100, 2)." %";
$resultrub = $cost-$actual_cost." ₽";}

else
$error = "введите данные";

?>
<form method="post">
    Изначальная стоимость:<br>
    <input name="cost" value="<?php echo $cost;?>"><br><br>
    Стоимость покупки:<br>
    <input name="actual_cost" value="<?php echo $actual_cost;?>"><br><br>
    Скидка в %<br>
    <input name="per_disc" value="<?php echo $result;?>"><br><br>
    Скидка в ₽<br>
    <input name="per_disc" value="<?php echo $resultrub;?>"><br><br>
    <input type="submit" value="рассчитать" ><br><br>
    <?php echo  $error;?>
</form>*/
