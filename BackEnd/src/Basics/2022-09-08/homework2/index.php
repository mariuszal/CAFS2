<?php

require_once './classes/User.php';
require_once './classes/Student.php';
require_once './classes/Worker.php';
require_once './classes/Driver.php';


$student = new Student('Studentas', 20);
$student->setScholarship('360');
$student->setCourse(2);

$driver = new Driver('Vairuotojas', 39);
$driver->setExperience('20');
$driver->setCategory('CE');
$driver->setSalary(2000);

var_dump($student);
var_dump($driver);
