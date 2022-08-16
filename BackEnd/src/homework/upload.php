<?php

define('UPLOAD_DIR', dirname(__FILE__) . '/uploads');
define('ALLOWED_EXTENSIONS', ['png', 'jpg', 'jpeg']);

// https://stackoverflow.com/questions/4356289/php-random-string-generator
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}


if (isset($_FILES['photo'])) {
	$file = $_FILES['photo'];

	if ($file['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$ext = strtolower($ext);

		if (!in_array($ext, ALLOWED_EXTENSIONS)) {
			echo 'File ext not allowed';

			exit;
		}

		$path = UPLOAD_DIR . '/' . date('Y/m/d');

		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}

		do {
			$name = generateRandomString(16);

			$path = sprintf('%s/%s.%s', $path, $name, $ext);
		} while (file_exists($path));

		
		$downloadFilePath = str_replace('/var/www', '', $path);
		
		$text = "Name: " . $input['name'];
		$text2 = "Surname: " . $input['surname']; 
		$text3 = "Lang: ". implode(' ', $input['lang']);
 
		$image = imagecreate(350,400);
		if($ext == 'jpg' || $ext == 'jpeg') {
			$photo = imagecreatefromjpeg($file['tmp_name']);
		} else if ($ext == 'png') {
			$photo = imagecreatefrompng($file['tmp_name']);
		} else { echo "unknown file type"; }
				
		$margeRight = 10;
		$margeBottom = 10;
		
		$photoWidth = imagesx($photo);
		$photoHeight = imagesy($photo);
		
		$color = imagecolorallocate($image, 200,200,200);
		$colorBlue = imagecolorallocate($image, 0,0,255);
		
		// imagestring($image, 2, 30, 30, $input['surname'], $colorBlue);
		imagestring($image, 2, 30, 30, $text, $colorBlue);
		imagestring($image, 2, 30, 40, $text2, $colorBlue);
		imagestring($image, 2, 30, 50, $text3, $colorBlue);

		imagecopy($image,$photo,
			// imagesx($image) - $photoWidth - $margeRight,
			100,
			// imagesy($image) - $photoHeight - $margeBottom,
			100,
			0,0,imagesx($photo),imagesy($photo));
		header('Content-type: image/jpeg');
		imagejpeg($image, 'user-info.jpg');
		
		imagedestroy($image);
		// pabaiga
		move_uploaded_file($file['tmp_name'], $path);
		
	}
}

