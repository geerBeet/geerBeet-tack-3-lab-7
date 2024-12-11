<?php

namespace Ilya\Lab7;

abstract class Employee
{
    protected string $name;
    protected string $position;
    protected int $summaMonu;


    public function __construct(string $name, string $position, int $summaMonu)
    {
        $this->name = $name;
        $this->position = $position;
        $this->summaMonu = $summaMonu;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSummaMonu(): int
    {
        return $this->summaMonu;
    }
    abstract public function calculateSalary(): float;
}
