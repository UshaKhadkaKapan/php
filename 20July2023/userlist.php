<?php

include 'dbconfig.php';

// $deletetask=deletetaskbyID();

// if(isset($_POST['edit-task'])) {
//     $createTask = updateTaskById();
// }

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row;

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $first = $row['first'];
        $last = $row['last'];

        echo "id: " . $id . " - Name: " . $first . " " . $last . "|<a href='edit.php?id={$id}'>  EDIT</a>  | <a href='delete.php?id={$id}'> DELETE</a> <br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
