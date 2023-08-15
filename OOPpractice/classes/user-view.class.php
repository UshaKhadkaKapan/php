<?php

include "users.class.php";

class UserView extends Users
{
    public function showUsers($name)
    {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]["first_name"] . $results[0]["last_name"];
    }
}
