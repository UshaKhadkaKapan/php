<?php

include "dbconfig.class.php";


class Users extends Dbh
{
    protected function getUser($name)
    {
        $sql = "SELECT * FROM actor WHERE first_name=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUserStmt($firstname, $lastname)
    {
        $sql = "INSERT INTO actor(first_name,last_name) VALUES(?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
    }
}
