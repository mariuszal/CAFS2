<?php

require_once './classes/Person.php';
require_once './classes/Programmer.php';
require_once './classes/Student.php';
require_once './classes/Teacher.php';


$programmer = new Programmer('Marius');
$student = new Student('Marco');
$teacher = new Teacher('Mario');

echo $programmer->greeting();
echo $student->greeting();
echo $teacher->greeting();