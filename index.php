<?php include 'includes/autoload.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP PHP</title>
</head>
<body>
    <form action="/includes/calc.inc.php" method="post">
      <label for="">First Number</label>
      <input type="number" name="num1" id="">

      <label for="">Operator</label>
      <select name="operator" id="">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
      </select>

      <label for="">Second Number</label>
      <input type="number" name="num2" id="">

      <button type="submit" value="">Submit</button>
    </form>

    <?php 
      $testObj = new Test();
      echo $testObj->getUsers();
    ?>
</body>
</html>