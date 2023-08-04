<?php

declare(strict_types=1);
include 'class-autoload.inc.php';


if (isset($_POST['submit'])) {

    $oper = $_POST['operation'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $cal1 = new Calc($oper, (int) $num1, (int) $num2);

    try {

        echo $cal1->calculator();
    } catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    }
}
