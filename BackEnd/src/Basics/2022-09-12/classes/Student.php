<?php

class Student extends Person {
    public function greeting(): string 
    {
        return "Hello! I'm $this->getName()";
    }
}