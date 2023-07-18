<?php
class Student
{
    public $car = 'bmw';

    public function getEmail()
    {
        $user = new User();
        echo $user->email;
    }
}
