<?php

class Teacher extends Person {
    public function greeting(): string 
    {
        return "Hello students! I'm $this->name";
    }
}