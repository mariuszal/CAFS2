<?php

class Student extends User 
{
    private $course = 1;
    private $scolarship;

    function __construct(string $firstName, ?string $lastName, int $course, ?string $scolarship)
    {
        parent::__construct($firstName, $lastName);
        $this->course = $course;
        $this->scolarship = $scolarship;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function setScolarship($scolarship) {
        $this->scrolarship = $scolarship;
    }

    public function getCourse() {
        return $this->course;
    }
    public function getScolarshie() {
        return $this->scolarshi;
    }
    
}