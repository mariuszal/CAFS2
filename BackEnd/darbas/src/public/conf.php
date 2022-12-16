<?php

$envFilePath =  '.env';

if (file_exists($envFilePath)) {
    define('ENV', parse_ini_file($envFilePath));
} else {
    echo 'Env file not found';
}

if (!function_exists('env')) {
	function env($key, $default = NULL)
	{
		if (array_key_exists($key, ENV)) {
			return ENV[$key];
		}

		return $default;
	}
    } 
    else {
	    echo '\"env\" alerdy exists';
	
    }

const ALLOWED_TABLE_NAMES = [
    'answers',
    'users',
    'chapters',
    'questions',
    'sections',
];


$url = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}{$_SERVER['PHP_SELF']}";
$footer = "<img src='img/smi.png' width='80'>";
