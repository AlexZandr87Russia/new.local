<?php
// Установка локали и выбор значений даты
setlocale(LC_ALL, 'russian');
$day = strftime('%d');
$month = strftime('%m');
$month = iconv('windows-1251', 'utf-8', $month);
$year = strftime('%Y');
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
$welcome = '';
/*   if ($hour > '0' and $hour < '6'): $welcome = "Доброй ночи";
   elseif ($hour >= '6' and $hour < '12'): $welcome = "Доброе утро";
   elseif ($hour >= '12' and $hour < '18'): $welcome = "Добрый день";
   elseif ($hour >= '18' and $hour < '23'): $welcome = "Добрый вечер";
   else: $welcome = "Доброй ночи";endif;
Далее представленно тоже самое только с помощью функции switch.
*/
switch ($hour) {
    case ($hour > '0' and $hour < '6'): $welcome = "Доброй ночи"; break;
    case ($hour >= '6' and $hour < '12'): $welcome = "Доброе утро"; break;
    case ($hour >= '12' and $hour < '18'): $welcome = "Добрый день"; break;
    case ($hour >= '18' and $hour < '23'): $welcome = "Добрый вечер"; break;
    default: $welcome = "Доброй ночи";
}

$leftMenu = [
    ['href' => 'index.php', 'link' => 'Домой'],
    ['href' => 'about.php', 'link' => 'О нас'],
    ['href' => 'contact.php', 'link' => 'Контакты'],
    ['href' => 'table.php', 'link' => 'Таблица умножения'],
    ['href' => 'calc.php', 'link' => 'Калькулятор']
];
