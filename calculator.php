<form method="post" action="calculator.php">
     <input type="text" name="num1">
     <select name="operator">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
     </select>
     <input type="text" name="num2">
     <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];
     $operator = $_POST['operator'];

     switch ($operator) {
          case "+":
               $result = $num1 + $num2;
               break;
          case "-":
               $result = $num1 - $num2;
               break;
          case "*":
               $result = $num1 * $num2;
               break;
          case "/":
               $result = $num1 / $num2;
               break;
          default:
               $result = "Invalid operator";
          }
         echo "Result: ".$result;
     }
     ?>