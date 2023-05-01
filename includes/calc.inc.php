<?php
    ini_set('display_errors', 1);
    include 'autoload.inc.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $calculation = new Calc((int)$num1, (int)$num2, $operator);
    echo $calculation->get_result();
    