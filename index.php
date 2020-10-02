<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
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
<?
require_once 'inc/top.inc.php'
?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?=$welcome?>, гость!</h1>
    <!-- Заголовок -->
      <?
      require_once 'inc/date.inc.php'
      ?>
    <!-- Область основного контента -->
      <?
      require_once 'inc/index.inc.php'
      ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
      <?
      require_once 'inc/menu.inc.php'
      ?>
    <!-- Навигация -->
  </div>

  <!-- Нижняя часть страницы -->
  <?
  require_once 'inc/bottom.inc.php'
  ?>
  <!-- Нижняя часть страницы -->
</body>

</html>