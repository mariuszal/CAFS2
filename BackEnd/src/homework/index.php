<?php
function dd(mixed $value): void{
    dump($value);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input = [];
	
	// REQUEST HANDLE
	if ($_SERVER['CONTENT_TYPE'] == 'application/json') {
		$inputJSON = file_get_contents('php://input');

		$input = json_decode($inputJSON, TRUE);
	} else if (strpos($_SERVER['CONTENT_TYPE'], 'multipart/form-data') !== FALSE) {
		$input = $_POST;
	
		require_once 'upload.php';

		if (isset($downloadFilePath)) {
			$input['photo'] = $downloadFilePath;
		} 
		// else { $input['photo'] = './img/default.jpg'; }
	}

	// RESPONSE HANDLE
	http_response_code(200);
	
	echo json_encode(['message' => 'User saved seccesfully ;)', 'data' => $input]);
	// var_dump($input);
	
	exit;
}


if(isset($_GET['id']) == 'as') { 
	echo "opapa\n";
	
} else {
	require_once 'views/index.phtml';
}