<?php

abstract class Person {
    public $name;

    public function __construct($name) 
    {
        $this->name = $name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    abstract public function greeting(): string ;
}