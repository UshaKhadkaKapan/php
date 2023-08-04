<?php

declare(strict_types=1);
include "includes/class-autoload.inc.php";
?>

<!DOCTYPE html>
<html>

<body>

    <h2>Calculator</h2>

    <form action="includes/calc.inc.php" method="post">
        <input type="number" name="num1" placeholder="First Number"><br>
        <select name="operation">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="divide">Divide</option>
            <option value="multiply">Multiply</option>
        </select><br>

        <input type="number" name="num2" placeholder="Second Number"><br>

        <button type="submit" name="submit">Calculate</button>
    </form>

</body>

</html>