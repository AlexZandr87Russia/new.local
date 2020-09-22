<form name="feedback" method="POST" action="test.php">
    <label>Введите день недели от 1 до 7: <input type="text" name="day"></label>
    <input type="submit" name="send" value="Отправить">
</form>

<?php
$arr = ['1' => 'Понедельник', 'Вториник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

if (isset($_POST['day']) and $_POST['day']<=7 and is_numeric($_POST['day']) and $_POST['day']!=0) {
    foreach ($arr as $key => $week) {

        if ($key == $_POST['day']) echo "<span style='font-weight: bold;color: #a52a2a;'>$week</span><br>\n";

        else echo "$week<br>\n";
    }
}
if ($_POST['day']>7 or !is_numeric($_POST['day']) and isset($_POST['day'])) echo "<p style='font-weight: bold;color: #a52a2a;'>Введенные не верные данные</p>";
/*
$num = 12;

    if ($num == 1 or $num == 2 or $num == 12) $result = "Зима";
    elseif ($num >= 3 and $num <= 5) $result = "Весна";
    elseif ($num >= 6 and $num <= 8) $result = "Лето";
    elseif ($num >= 9 and $num <= 11) $result = "Осень";
      else $result = "Иди на хуй";

echo $result;



/*
if ($x > 50) $result = $x*$x;
elseif ($x > 10 and $x < 30) $result = 0;
else $result = "Ошибка";


echo $result;


$x = "218";
$str = strlen($x);
$num = 0;

for ($i=0;$str>$i;$i++) {
    if ($i==1) $x{1} = 0;
};

echo $x;


$x = 21;
$y = 81;

$num = $x % 3;
$num2 = $x % 5;
$num3 = $y % 3;
$num4 = $y % 5;

echo "$num\n$num2\n$num3\n$num4";


$x = 21;
$y = 81;
$z = 365;
$arr = [$x, $y, $z];

foreach ($arr as $value) {$new +=$value/count($arr);};

echo $new;

$x = "544554343224343432299999999999999999999565545634";
$eq = strlen($x);
$sum = 0;
for ($i=0;$i<$eq;$i++){

    $sum += (int)$x[$i];

}
echo $sum."\n";


$arr = [3, 5, 8,18,25];
$count = (int)count($arr);
$sum = array_sum($arr);
$eq = $sum / $count;

echo $eq;
*/