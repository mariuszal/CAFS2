<?php

class Student extends User
{
    protected $scholarship;
    protected $course;

    public function setScholarship(float $scholarship) : void
    {
        $this->scholarship = $scholarship;
    }

    public function getScholarship() : float
    {
        return $this->scholarship;
    }

    public function setCourse(int|string $course) : void
    {
        $this->course = $course;
    }

    public function getCourse() : int|string
    {
        return $this->course;
    }
}