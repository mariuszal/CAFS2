<?php

class Driver extends Worker
{
    protected $experience;
    protected $category;
   
    public function setExperience(string|int $experience) : void
    {
        $this->experience = $experience;
    }

    public function getExperience() : string|int
    {
        return $this->experience;
    }

    public function setCategory(array|string $category) : void
    {
        $this->category = $category;
    }

    public function getCategory() : array|string
    {
        return $this->category;
    }
}