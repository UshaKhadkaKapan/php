<?php

include 'Student.php';

class User extends Student
{
    public $name = 'usha';
    protected $email = 'test@email.com';
    private $id;


    public function __construct($dbSetting)
    {
        echo $dbSetting;
    }

    public function hello()
    {
        echo $this->car;
    }

    private function room()
    {
        echo 'room';
    }
}
