<?php

class Bus extends Vehicle
{
    public function __construct(string $make, string $model, int $year, int $wheels) 
    {
        parent::__construct($make, $model, $year);
        $this->setWheelsNumber($wheels);
    }

    public function getFuelType(): array
    {
        return [2, 3];
    }
}