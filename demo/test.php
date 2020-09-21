<?php
$num = 5;

if ($num == 1 or $num == 2 or $num == 12) $result = "Зима";
elseif ($num == 3 or $num == 4 or $num == 5) $result = "Весна";
elseif ($num == 6 or $num == 7 or $num == 8) $result = "Лето";
elseif ($num ==9 or $num == 10 or $num == 11) $result = "Осень";
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