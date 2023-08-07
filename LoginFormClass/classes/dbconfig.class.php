<?php

class Dbh
{

    private $host = "localhost";
    private $username = "root";
    private $password = "Usha@123";
    private $dbname = "user";

    protected function connect()
    {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}
