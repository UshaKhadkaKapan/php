<?php

include 'dbconfig.php';


$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully" &&  header("Location: http://localhost/practice/20July2023/userlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
