<?php

include 'index.php';

class admin extends user
{

    function message()
    {
        echo "Hi, my name is {$this->fname} and last name is {$this->lname}";
    }
}

$admin = new Admin("John", "Doe");
$admin->message();
