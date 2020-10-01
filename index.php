<?php
include 'inc/lib.inc.php';
include 'inc/data.inc.php';
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
<?=include 'inc/top.inc.php'?>
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
      <?=include 'inc/index.inc.php'?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
      <?=include 'inc/menu.inc.php'?>
    <!-- Навигация -->
  </div>

  <!-- Нижняя часть страницы -->
  <?=include 'inc/bottom.inc.php'?>
  <!-- Нижняя часть страницы -->
</body>

</html>