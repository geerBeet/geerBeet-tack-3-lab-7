<?php

namespace Ilya\Lab7;

class PartTimeEmployee extends Employee
{
    private float $hoursWorked;
    public function __construct(string $name, string $position, int $summaMonu, float $hoursWorked)
    {
        parent::__construct($name, $position, $summaMonu);
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary(): float
    {
        return $this->summaMonu * $this->hoursWorked;
    }

    public function getHoursWorked(): float
    {
        return $this->hoursWorked;
    }
}
