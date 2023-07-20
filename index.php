<html>

<body>

    <form action="index.php" method="post">
        Number1: <input type="text" name="number1"><br>
        Number2: <input type="text" name="number2"><br>
        Operation: <select type="text" name="operation">
            <option value="+">Add</option>
            <option value="-">Sub</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
        </select><br>

        <input type="submit">
    </form>

</body>

</html>

<?php

// include 'User.php';
// $user = new User('database');
// $user->hello();


// $student = new Student();
// $student->getEmail();


// $name = "Usha";
// $age = 23;
// $gender = "Female";

// echo "My name is " . $name . " I am " . $age . ". I am " . $gender;

// $x = 5;
// $name = "Usha";
// //global variable declaration outside function scope

// var_dump($name);

// define("Name", "Welcome to Programming");
// echo Name;

// $x = 5;
// if ($x = 5) {
//     echo "Statement is true";
// } else {
//     echo "statement is false";
// }

// switch case example
// $country = "Australia";

// switch ($country) {
//     case "India":
//         echo " I love India";
//         break;
//     case "Japan":
//         echo "I like Japan more than any other country.";
//         break;
//     case "Australia":
//         echo " Australians are the best!";
//         break;
// }

// $x = 10;

// while ($x <= 15) {
//     echo 'The value of x :$x<br/>';
//     ++$x;
// }

// $x = 10;

// do {
//     echo ' The Value Of X: ' . $x . ' <br>';
//     --$x;
// } while ($x >= 1);

// $x = 1;

// do {
//     echo 'The number is x :' . $x . '<br/>';
//     $x++;
// } while ($x <= 10);

// for ($x = 0; $x <= 10; $x++) {
//     echo "The value of x: " . $x . '<br/>';
// }

// for ($x = 0; $x <= 10; $x++) {
//     if ($x == 5) {
//         break;
//     } else {
//         echo 'The value of x: ' . $x . "<br/>";
//     }
// }

// function add($a, $b)
// {
//     echo $a + $b;
// }

// add(1, 2);

// function person($name, $age, $gender)
// {
//     echo "My name is " . $name . " and my age is " . $age . " and I am one " . $gender;
// }

// person("usha", 23, "female");

// To print array, we should use var_dump
// $flower = array("rose", "lily", "tulip", "lotus");
// var_dump($flower);

// global scopes

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];

// form

// print_r($_POST['name']);

// function add($a, $b)
// {
//     $sum = $a + $b;
//     return $sum;
// }

// $x = 1;
// $y = 4;

// $result = add($x, $y);
// echo $result;
// $x=$_POST[number1];
//print_r($_POST);
// $x = $_POST['number1'];
// $y = $_POST['number2'];
// $action = $_POST['operation'];

// if (!is_numeric($x)) {
//     echo 'invalid input number1';
//     exit;
// }

// if (!is_numeric($y)) {
//     echo 'invalid input number2';
//     exit;
// }

// function calculate($a, $b, $action)
// {
//     switch ($action) {
//         case '+':
//             $output = $a + $b;
//             break;
//         case '-':
//             $output = $a - $b;
//             break;
//         case '*':
//             $output = $a * $b;
//             break;
//         case '/':
//             $output = $a / $b;
//             break;
//         default:
//             $output = "Invalid Operator";
//     }
//     return $output;
// }


// $result = calculate($x, $y, $action);
// echo $result;
