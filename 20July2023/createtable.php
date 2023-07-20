<?php

include 'dbconfig.php';

$sql = 'create table users (
    id int(10) auto_increment primary key,
    first varchar(255),
    last varchar(255),
    gender varchar(255),
    occupation varchar(255),
    email varchar(255),
    password varchar(255)
    )';

if ($conn->query($sql) === TRUE) {
    echo "User table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
