<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
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
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
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