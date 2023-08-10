<?php

class Dbh
{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "Usha@123";
    private $db_name = "OOP";

    public function connect()
    {

        $connect_db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if (mysqli_connect_errno()) {
            printf("Connection failed: %s\
", mysqli_connect_error());
            exit();
        }
        return $connect_db;
    }
}
