<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
/*
ini_get("post_max_size");
50M
1G
1234K
123456789
*/
$size = ini_get("post_max_size");
$letter = strtoupper($size[strlen($size)-1]);
$size = (int)$size;
switch (strtoupper($letter)){
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "K": $size *= 1024;
    default: $size = (int)$size;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
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
  <?
  require_once 'inc/date.inc.php'
  ?>
  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
      <p>Максимальный размер отправляемых данных: <?=$size;?> байт.</p>
    <!-- Область основного контента -->
  </div>
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