<?php
// Установка локали и выбор значений даты
setlocale(LC_ALL, 'russian');
$day = strftime('%d');
$month = strftime('%m');
$month = iconv('windows-1251', 'utf-8', $month);
ini_set('date.timezone', 'Asia/Yekaterinburg');
$time = date("H:i:s");
if($month=="01") $mon="января";
if($month=="02") $mon="февраля";
if($month=="03") $mon="марта";
if($month=="04") $mon="ппреля";
if($month=="05") $mon="мая";
if($month=="06") $mon="июня";
if($month=="07") $mon="июля";
if($month=="08") $mon="августа";
if($month=="09") $mon="сентября";
if($month=="10") $mon="октября";
if($month=="11") $mon="ноября";
if($month=="12") $mon="декабря";
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int)strftime('%H');


?>
<blockquote>
    <?= "Сегодня $day $mon $year года. Время: $time" ?>
</blockquote>
