<?php

namespace Ilya\Lab7;

use Ilya\Lab7\Employee;

class FullTimeEmployee extends Employee
{
    public string $name;
    public string $position;
    public function fullNameAndPoshion(string $name, string $position, int $summaMonu)
    {
        $this->name = $name;
        $this->position = $position;
        $this->summaMonu = $summaMonu;
    }
    public function calculateSalary(): float
    {
        return $this->summaMonu;
    }
}
