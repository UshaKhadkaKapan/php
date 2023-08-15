<?php


class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "Usha@123";
    private $db = "sakila";


    protected function connect()
    {
        $dbcon = new PDO("mysql::host=$this->host;dbname=$this->db;", $this->user, $this->pwd);
        $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $dbcon;
    }
}

// try {
//     $server = "localhost";
//     $user = "root";
//     $password = "Usha@123";
//     $db = "pdo";

//     $dbcon = new PDO("mysql:host=$server; dbname=$db", $user, $password);

//     if ($dbcon) {
//         echo "Database Connected Successfully!";
//     } else {
//         echo 'Connection Failed!';
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
