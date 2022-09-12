<?php

class Worker extends User
{
    protected $salary;

    public function setSalary(float $salary) : void
    {
        $this->salary = $salary;
    }

    public function getSalary() : float
    {
        return $this->salary;
    }
}