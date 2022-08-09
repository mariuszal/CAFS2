<?php
require('data.php');
function dd(mixed $value): void{
    dump($value);
    exit();
}

function optionFunction($arr) {
    $r = '';
    for ($i=0; $i < count($arr); $i++) { 
        $value = strtolower($arr[$i]);
        $name = ucfirst($arr[$i]);
        $r .= "<option value='{$value}'>{$name}</option>";
    }
    return $r;
}

function checkBoxFunction($inputeName, $arr, $checkboxPosiotion) {
    // jeigu paduota $checkbocPosition = 0, checkbox bus pries teksta, jeigu kita reiksme
    //    tada checkbox bus po teksto,
    $r = '';
    for ($i=0; $i < count($arr); $i++) {
        $value = strtolower($arr[$i]);
        $label = "<label for='{$value}'> {$arr[$i]} </label>";
        $inpute = "<input type='checkbox' name='{$inputeName}[]' id='{$value}' value='{$arr[$i]}'>";
        if($checkboxPosiotion == 0) {
            $r .= $inpute . $label . "<br>";
        } else {
            $r .= $label . $inpute . "<br>";
        }
    }
    return $r;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}

function uploadFile($file) {
$dirForUploads = '/uploads';
define('UPLOAD_DIR', dirname(__FILE__) . $dirForUploads);
define('ALLOWED_EXTENSIONS', ['png', 'jpg', 'jpeg']);
 $r = date('Y/m/d');

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
        
		move_uploaded_file($file['tmp_name'], $path);
        $r = "<br><img src=\".{$dirForUploads}/{$r}/{$name}.{$ext}\">";
    }
    return $r;
}