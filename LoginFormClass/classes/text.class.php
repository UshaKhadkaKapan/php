<?php
include "dbconfig.class.php";

class Test extends Dbh
{
    public function getUser()
    {
        $sql = "SELECT * FROM actor";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetch()) {
            echo $row['first_name'];
            echo $row['last_name'];
        }
    }
}
