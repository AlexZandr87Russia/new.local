<?php
// Инициализация заголовков страницы
$title = 'Сайт нашей школы';

$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id){
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Онлайн калькулятор';
        $header = 'Калькулятор';
        break;

}

require_once 'inc/lib.inc.php';
set_error_handler('Myerror');
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
$header = "$welcome, Гость!";
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title?></title>
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
    <h1><?php echo $header?></h1>
    <!-- Заголовок -->
      <?
      require_once 'inc/date.inc.php'
      ?>
    <!-- Область основного контента -->
      <?php
      switch ($id) {
          case 'about':
              include 'about.php';
              break;
          case 'contact':
              include 'contact.php';
              break;
          case 'table':
              include 'table.php';
              break;
          case 'calc':
              include 'calc.php';
              break;
          default: include 'inc/index.inc.php';

      }
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