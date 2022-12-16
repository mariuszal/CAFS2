<?php
require_once "connections.php";

function handleInputs()
{

    $error = [];

    if ($_POST) {
        foreach ($_POST as $name => $value) {
            if (!$value && $name != 'short_description') {
                $error[] = "Value $name must be set";
            }
        }
    }

    $email = $_POST['email'];
    $user = getUserExists($email);
        
    if($user) 
    { 
        $error[] = "This email is in our DataBase"; 
    }

    if ($error) 
    {
        $error = (isset($error[0]) && $error[0]) ? "error={$error[0]}" : '';
        header("Location: user_add.php?$error");
    } else {
        insertUSer('users', $_POST);
        header("Location: user_list.php");
    }
    exit;
}

handleInputs();
