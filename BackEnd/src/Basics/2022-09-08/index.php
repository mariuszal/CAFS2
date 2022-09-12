<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Student.php';
require_once __DIR__ . '/classes/Worker.php';
require_once __DIR__ . '/classes/Driver.php';


try {

$student = new Student('Studentas', 25);
$driver = new Driver('Vairuotojas', 53);

$student->setScholarship('500');
$student->setCourse(3);

$driver->setExperience('26 metai');
$driver->setCategory('C');
$driver->setSalary(3500);

var_dump($student);
var_dump($driver);

}
catch (Exception $e) {
    echo $e->getMessage(), "\n", "Error code: ", "\n", $e->getCode();
}