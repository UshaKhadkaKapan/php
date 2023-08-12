<?php
include "dbconfig.class.php";

class Test extends Dbh
{
    public function getUser()
    {
        $sql = "SELECT * FROM actor";
        $stmt = $this->connect()->query($sql);
        // here fetch method get all the data from database
        while ($row = $stmt->fetch()) {
            echo $row['first_name'];
            echo $row['last_name'];
        }
    }

    // using prepare statement
    public function getUserStmt($firstname, $lastname)
    {
        $sql = "SELECT * FROM actor WHERE first_name = ? AND last_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $name = $stmt->fetchAll();

        foreach ($name as $name) {
            echo $name['first_name'];
        }
    }
}
