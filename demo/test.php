<?php

$count = 0;
for ($i = 1; $i <= 999; $i++) {

    $z = str_split($i);
    $sum = array_sum($z);



  $lo = str_split($sum);

  print_r($lo)."\n<br>";
}

?>

<?php
/*
$randCount = 3; //Количество элементов массива
$randMin = 0; //Минимальное рандомное число
$randMax = 100; //Максимальное рандомное число
$randArray = array(); //Инициализируем массив

/**
 * Цикл будем повторять до упора.
 * Важно! Если rage (интервал), между $randMin и $randMax
 * будет меньше $randCount, цикл будет бесконечным!
 * Это очень важное замечание, так что решение "не для всех"
 * Однако, снабжено комментариями ;)
 */
/*
while (true) { //Погнали
    $rand = rand($randMin, $randMax); //Формируем рандомное число
    if (!in_array($rand, $randArray)) { //Если такого числа в массиве нет
        $randArray[] = $rand; //Добавляем его
        if (sizeof($randArray)  == $randCount) { //Если массив заполнен до упора
            break; //Выходим из цикла
        }
    }
}

print_r($randArray); //Выводим массив
/*
 * for ($i=0; $i < 100 ; $i++) {
if (strpos($i, "7", 0) !== false and $i % 3 ==0 ) {
echo "$i\n";

}
}

$arr = ["Понедельник", "Вотрник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];

$day = (int)$_POST["day"] - 1;

if ($day>7 or $day<=0) $result = "Нужно значние от 1 до 7";
//if (!is_int($day)) $result = "Нужно числовое значние от 1 до 7";


    <form name="feedback" method="POST" action="test.php">
        <p><label>День недели<br><input value="" style="width:165px; height: 25px;" name="day"></label><br>
            </p>
        <input type="submit" name="send" value="Отправить">
    </form>
<?php
if ($day>6 or $day<0) echo "<span style='color: brown'>Нужно значние от 1 до 7</span> <br><br>";
foreach ($arr as $key => $v){
 if ($key != $day)    echo "$v\n<br>";
    if ( $key == $day) echo "<span style='color: #fb635a; font-size: 25px;'>$v</span>\n<br>";


}


?>

<?php
/*
function form(){
$country = ['Германия','Франция','Испнаия'];
foreach ($country as $f)
    echo "<option value='$f'>$f</option>\n";
}
function result(){
    if ($_POST['country'] == 'Германия') echo 'Берлин';
    elseif ($_POST['country'] == 'Франция') echo 'Париж';
    elseif ($_POST['country'] == 'Испнаия') echo 'Мадрид';
}
?>
<form name="capital" method="POST" action="test.php">
    <p><select style="width:165px; height: 25px;" name="country"></p>
    <option value="0">Выберите Город</option>
            <p><?php form()?></p></select><br>
    <p><input type="submit" name="send" value="Отправить"></p>
    <p><?php result()?></p>
<?php


$country = $_POST['country'];
$day = $_POST['day'];
$sale = $_POST['sale'];
$result = 400;
$none = "";
$checked = "";
if ($_POST['send'])
{
if (empty($country)) $err1 = "<span style='color: #fb635a;font-style: italic;'>Выбериет страну отдыха</span><br>";
if (!is_numeric($day) or empty($day)) $err2 = "<span style='color: #fb635a;font-style: italic;'>Некорректно введено<br>количество дней отдыха</span>";
    if ($country == "Египет" and !empty($country) and !empty($day)) $result += $result*0.1;
    if ($country == "Италия" and !empty($country) and !empty($day)) $result += $result*0.12;
    if (!empty($country) and !empty($day) and is_numeric($day))
    $result = $result*$day;
    if ($sale) {
    $result = $result-($result*0.05);
    $checked = " checked";}
}
if ($country == "Турция") {$none1 = " style = 'display: none;'";}
if ($country == "Египет") {$none2 = " style = 'display: none;'";}
if ($country == "Италия") {$none3 = " style = 'display: none;'";}
?>


<form name="feedback" method="POST" action="test.php">
    <p>Выберете страну:<br><select style="width:165px; height: 25px;" name="country">
            <option><?=$country?></option>
<option<?=$none1?>>Турция</option>
<option<?=$none2?>>Египет</option>
<option<?=$none3?>>Италия</option>
</select><br><?="$err1"?></p>
<p><label>Количество дней отдыха<br><input value="<?=$day?>" style="width:165px; height: 25px;" name="day"></label><br>
    <?="$err2"?></p>
<input type="checkbox"<?=$checked?> name="sale">Наличие скидки<br><br>
<input type="submit" name="send" value="Отправить">
</form>
<p>Cтоимость тура:<?php if (!empty($country) and !empty($day))echo "<span style='color: #fb635a;'> {$result} ₽</span>"?></p>


<?php

/*


function my_count($var, $mode = 0){
    if (is_null($var)) return 0;
    if (!is_array($var)) return 1;
        $cnt=0;
        foreach ($var as $v) {
            if (is_array($v) and $mode = 1)
               $cnt += my_count($v, 1);
            $cnt++;
        }
        return $cnt;
}

echo my_count($arr);

/*
if (isset($_POST['age'])) {
    if (!is_numeric($_POST['age'])) echo "Не является числом";
    elseif ($_POST['age']<3) echo "А не мало?!";
    elseif ($_POST['age']>99) echo "А не дохуя?!";
    elseif ($_POST['age']>=70) echo "Здравствуйте, уважаемый!";
    elseif ($_POST['age']>99) echo "А не дохя?!";
    elseif ($_POST['age']<70) echo "Привет, молодой!";

}


$arr = ['1' => 'Понедельник', 'Вториник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
if (isset($_POST['day']) and $_POST['day']<=7 and is_numeric($_POST['day']) and $_POST['day']!=0) {
    foreach ($arr as $key => $week) {

        if ($key == $_POST['day']) echo "<span style='font-weight: bold;color: #a52a2a;'>$week</span><br>\n";

        else echo "$week<br>\n";
    }
}
if ($_POST['day']>7 or !is_numeric($_POST['day']) and isset($_POST['day'])) echo "<p style='font-weight: bold;color: #a52a2a;'>Введенные не верные данные</p>";

/*
function season($num) {
    if ($num == 1 or $num == 2 or $num == 12) $result = "Зима";
    elseif ($num >= 3 and $num <= 5) $result = "Весна";
    elseif ($num >= 6 and $num <= 8) $result = "Лето";
    elseif ($num >= 9 and $num <= 11) $result = "Осень";
      else $result = "Иди на хуй";
echo $result;
}
season(1);

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