<?php
include './classes/user-view.class.php';
include './classes/user-controller.class.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>login form</title>
</head>

<body>

    <h1>PDO</h1>

    <?php
    $newObj = new UserView();
    $newObj->showUsers("Usha");

    $newObject = new UserController();
    $newObject->createUser("Bipin", "Khadka")




    ?>


</body>

</html>