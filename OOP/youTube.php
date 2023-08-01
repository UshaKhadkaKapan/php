<?php

// class user
// {

//     public $name = "Usha";
//     public $age = 23;
//     public $gender = "female";
// }

// class animal
// {
//     public function info()
//     {
//         echo "This is an Animal";
//     }
// }

class person
{
    //properties
    public $name;
    public $eyecolor;
    public $gender;

    //method
    public function __construct($n, $e, $g)
    {
        $this->name = $n;
        $this->eyecolor = $e;
        $this->gender = $g;
    }

    public function setName($n)
    {
        $this->name = $n;
    }

    public function getName()
    {
        return $this->name;
    }
}
