<?php
require_once "connections.php";

if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
    $user = get('users', $user_id);
} else {
    $user_id = NULL;
    http_response_code(400);
    exit('PARAMETER EXPECTED');
}


function userInfo() 
{
    $user_id = $_GET['user_id'];
    if($user_id) {
        $user = get('users', $user_id); 
    }
    $user_content = "<div><img src='img/ok.png'></div><p><div style='font-size: 20px'><b>{$user['first_name']}</b>, praėjote visus klausimus</div>";
    
    return $user_content;
}

require_once "./resources/views/user_seccess.phtml";
