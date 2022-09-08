<?php

class Bmw extends Car
{
    public function __construct(string $model, int $year) 
    {
        parent::__construct('BMW', $model, $year);
    }
}