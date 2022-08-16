<?php

// $text = $_GET['text'] ?? 'Hello World';
$text = "help world";
 
$image = imagecreate(350,400);
$photo = imagecreatefromjpeg('default.jpg');

$margeRight = 10;
$margeBottom = 10;

$photoWidth = imagesx($photo);
$photoHeight = imagesy($photo);

imagecopy($image,$photo,
	imagesx($image) - $photoWidth - $margeRight,
	imagesy($image) - $photoHeight - $margeBottom,
	0,0,imagesx($photo),imagesy($photo));

$color = imagecolorallocate($image, 200,200,200);
$colorBlue = imagecolorallocate($image, 0,0,255);

imagestring($image, 2, 30, 30, $text, $colorBlue);
imagestring($image, 2, 30, 70, $text, $colorBlue);

header('Content-type: image/jpeg');
imageJpeg($image, 'test.jpg');

imagedestroy($image);
header('Location: test.jpg');