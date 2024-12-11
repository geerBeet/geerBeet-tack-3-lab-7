<?php

namespace Ilya\Lab7;

use PHPUnit\Framework\TestCase;
use Ilya\Lab7\PartTimeEmployee;

class TestPartTimeEmployee extends TestCase
{
    private PartTimeEmployee $employee;
    protected function setUp(): void
    {
        $this->employee = new PartTimeEmployee("Петров", "Программист PHP Джун", 150, 20);
    }

    public function testCalculateSalary(): void
    {
        $expectedSalary = 150 * 20;
        $this->assertEquals($expectedSalary, $this->employee->calculateSalary());
    }

    public function testGetHoursWorked(): void
    {
        $this->assertEquals(20, $this->employee->getHoursWorked());
    }

    public function testEmployeeDetails(): void
    {
        $this->assertEquals("Петров", $this->employee->getName());
        $this->assertEquals("Программист PHP Джун", $this->employee->getPosition());
        $this->assertEquals(150, $this->employee->getSummaMonu());
    }
}
