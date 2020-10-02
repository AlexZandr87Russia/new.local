<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
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
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
<?php
drawTable(12, 12, "#fb635a");

?>
    <!-- Таблица -->
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