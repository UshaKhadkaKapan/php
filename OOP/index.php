<?php
class fruit
{
    // properties
    public $name;
    public $color;

    // methods
    function __construct($n, $c)
    {
        $this->name = $n;
        $this->color = $c;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple = new fruit("Apple", "red");
echo "The name of the apple is " . $apple->get_name() . "<br>";
echo "And its color is " .  $apple->get_color() . "<br><hr>";
