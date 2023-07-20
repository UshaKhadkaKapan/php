<?php

include 'dbconfig.php';

$sql = "SELECT id, email, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - email: " . $row["email"] . " " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
