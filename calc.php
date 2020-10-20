 <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $num1 = (int)$_POST['num1'];
     $num2 = (int)$_POST['num2'];
     $operator = $_POST['operator'];
 }


 if ($num1 and $num2) {
 switch ($operator) {
     case '+':
         $action = $num1+$num2;
         $result = "<strong>Результат:</strong> $num1 + $num2 = $action";
         break;
     case '-':
         $action = $num1-$num2;
         $result = "<strong>Результат:</strong> $num1 - $num2 = $action";
         break;
     case '*':
         $action = $num1*$num2;
         $result = "<strong>Результат:</strong> $num1 * $num2 = $action";
         break;
     case '/':

         $action = $num1/$num2;
         $result = "<strong>Результат:</strong> $num1 / $num2 = $action";
         break;
     default:
         $result = "Оператор должен являтся \"+,-,*,/ \"";
 }
 }
if (!is_numeric($num1) or !is_numeric($num2))
    $result = "Число 1 и Число 2 должно быть числами";
 if ($num2 == 0 and !$num2) $result = "Ты обкурился? На 0 не делят!";

 ?>
    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="POST">
      <label>Число 1:</label>
      <br />
      <input value="<?= $_POST['num1']?>" name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input value="<?= $_POST['operator']?>" name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input value="<?= $_POST['num2']?>" name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form><br>
 <?= $result;?>
    <!-- Область основного контента -->