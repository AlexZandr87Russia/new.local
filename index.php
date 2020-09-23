<?php
function DrawMenu($menu, $vertical = true){
    if (!$vertical) echo "<ul style='text-align:center;'>\n";
    else echo  "<ul>\n";
    foreach ($menu as $item) {
        if (!$vertical) echo "\t<li style='display: inline; padding-right: 15px;'>\n";
        else echo "\t<li>\n";
        echo "\t\t<a href='{$item['href']}'>{$item['link']}</a>\n";
        echo "\t</li>\n";

    }
    echo  "</ul>\n";

};
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

?>
<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?=$welcome?>, гость!</h1>
    <!-- Заголовок -->
      <blockquote>
          <?= "Сегодня $day $mon $year года. Время: $time" ?>
      </blockquote>
    <!-- Область основного контента -->
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
<?php
DrawMenu($leftMenu, $vertical = true)
?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <hr>
  <?php
  DrawMenu($leftMenu, $vertical = false)
  ?>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?=$year?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>