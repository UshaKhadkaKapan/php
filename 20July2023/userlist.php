<?php

include 'dbconfig.php';

// $deletetask=deletetaskbyID();

// if(isset($_POST['edit-task'])) {
//     $createTask = updateTaskById();
// }

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["first"] . " " . $row["last"] . "|  | <a href='" .  'delete.php?id=' . $row['id'] . "'>DELETE</a>" . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
