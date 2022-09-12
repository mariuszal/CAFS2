<?php

class Programmer extends Person {
    public function greeting(): string 
    {
        return "Hello world! I'm $this->name";
    }
}