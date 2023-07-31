<?php

class man
{
    // properties
    public $fname;
    public $lname;
    public $age;

    // methods

    function set_fname($fname)
    {
        $this->fname = $fname;
    }
    function get_fname()
    {
        return $this->fname;
    }
    function set_lname($lname)
    {
        $this->lname = $lname;
    }
    function get_lname()
    {
        return $this->lname;
    }
}

$man1 = new man();
$man1->set_fname("Usha");
$man1->set_lname("Khadka");
echo "First Name: " . $man1->get_fname() . "<br>";  # First name
