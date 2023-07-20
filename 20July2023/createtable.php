<?php

include 'dbconfig.php';

$sql = 'create table users (
    id int(10) auto_increment primary key,
    email varchar(255),
    password varchar(255)
    )';

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
