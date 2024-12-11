<?php

namespace Ilya\Lab7;

use PHPUnit\Framework\TestCase;
use Ilya\Lab7\FullTimeEmployee;

class TestFullTimeEmployee extends TestCase
{
    private FullTimeEmployee $employee;
    protected function setUp(): void
    {
        $this->employee = new FullTimeEmployee("Петров", "Программист PHP Джун", 150000);
    }

    public function testCalculateSalary(): void
    {
        $expectedSalary = 150000;
        $this->assertEquals($expectedSalary, $this->employee->calculateSalary());
    }

    public function testEmployeeDetails(): void
    {
        $this->assertEquals("Петров", $this->employee->getName());
        $this->assertEquals("Программист PHP Джун", $this->employee->getPosition());
        $this->assertEquals(150000, $this->employee->getSummaMonu());
    }
}
