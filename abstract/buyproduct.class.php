<?php

// include 'paymenttypes.abstract.php';

class BMW extends car
{
    public function intro(): string
    {
        return "Hi, I am $this->name and my color is $this->color";
    }
}
