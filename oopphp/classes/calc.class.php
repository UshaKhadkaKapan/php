<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $oper, int $num1, int $num2)
    {
        $this->operator = $oper;
        $this->num1 = $num1;
        $this->num2 =  $num2;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case "add":
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'divide':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'multiply':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Invalid operator";
                break;
        }
    }
}
