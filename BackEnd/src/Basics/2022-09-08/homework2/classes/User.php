<?php

class User {

    protected $name;
    protected $age;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
    
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }
}