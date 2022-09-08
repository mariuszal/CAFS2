<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    function __construct(string $make, ?string $model, int $year)
    {
        $this->setMake($make);
		$this->setModel($model);
        $this->setYear($year);
    }
	public function setMake(string $name): void
	{
		$this->make = $name;
	}
	public function setModel(?string $name): void
	{
		$this->model = $name;
	}
    public function setYear(string $year): void
	{
		$this->year = $year;
	}
	public function setWheelsNumber(int $wheels): void
	{
		$this->wheels = $wheels;
	}

    public function getIntroduction(): string
    {
        return $this->make ." " . $this->model;
    }
    public function getAge(): int
    {
        return date('Y') - $this->year;
    }
    public function getAgeText(): string
    {
        if($this->getAge() <= 10) {
            return "10 years or newer";
        } else {
            return "11 years or older";
        }
    }
    // 
    public function getWheelsNumber(): ?int
    {
		return $this->wheels;
	}
    public function getWheelsNumberText(): string
    {
        return static::class . " has " . $this->getWheelsNumber() . " wheels";
    }
    public function getFuelType(): array
    {
        throw new Exception('Fuel type not found');
    }

}