<?php

class Calculator {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $num1, int $num2) {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate() {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
            case 'sub':
                return $this->num1 - $this->num2;
            case 'div':
                if ($this->num2 != 0) {
                    return $this->num1 / $this->num2;
                } else {
                    return "Cannot divide by zero.";
                }
            case 'mul':
                return $this->num1 * $this->num2;
            default:
                return "Invalid operator.";
        }
    }
}
