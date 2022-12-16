<?php
require_once "connections.php";

if (isset($_GET['delete'])) 
{
    $user_id = $_GET['delete'];
    softDelete($user_id);

} elseif(isset($_GET['restore']))
{
    $user_id = $_GET['restore'];
    restoreDeleted($user_id);

}elseif(isset($_GET['remove']))
{
    $user_id = $_GET['remove'];
    delete($user_id);

}elseif(isset($_GET['update']))
{
    $user_id = $_GET['update'];
    update($user_id, $_POST);

}elseif(isset($_GET['sendmail']))
{
    $user_id = $_GET['sendmail'];
    $url = $_GET['url'];
    sendMail($user_id, $url);

} else {
    http_response_code(400);
    exit('PARAMETER EXPECTED');
}

function softDelete($user_id)
{
    date_default_timezone_set("Europe/Vilnius");
    updateRow('users', ['deleted_at' => date("Y-m-d h:i:s")], $user_id);
    header("Location: user_list.php?deleted=1");
}

function restoreDeleted($user_id)
{   
    updateRow('users', ['deleted_at' => NULL], $user_id);
    header("Location: user_list.php");
}

function delete($user_id)
{   
    deleteRow('users', $user_id);
    deleteRow('answers', $user_id);
    header("Location: user_list.php?deleted=1");
}

function update($user_id, $data)
{
    $error = [];
    if ($_POST) {
        foreach ($_POST as $name => $value) {
            if (!$value && $name != 'short_description') {
                $error[] = "Value $name must be set";
            }
        }
    }

    if ($error) 
    {
        $error = (isset($error[0]) && $error[0]) ? "error={$error[0]}" : '';
        header("Location: user_edit.php?user_id=$user_id&$error");
    } else {
        $newPass = md5($data['email']);
        $data['user_id'] = $newPass;
        // dd($data);
        updateRow('users', $_POST, $user_id);
        updateRow('answers', ['user_id' => $newPass], $user_id);
        header("Location: user_list.php");
    }
    exit;
}

function sendMail($user_id, $url) 
{
    $user = get('users', $user_id);

    $to = $user['email'];
    $subject = "apklausos nuoroda";

    $message = "
                <html>
                <head>
                <title>Coaching Lab</title>
                </head>
                <body>
                <p>CoachingLab - lyderystės programa!</p>
                <p>
                <p>
                {$user['first_name']}, maloniai kviečiame užpildyti anketą.</p>
                <p>Jūsų nuoroda: {$url}</p>
                </body>
                </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: noreplay@coachinglab.lt' . "\r\n";
            $headers .= 'Cc: lab@coachinglab.lt' . "\r\n";
        $dd = "to: {$to} \n subject: {$subject} \n mesage: {$message} \n headers: {$headers}";
        dd($dd);
        //https://www.w3schools.com/php/func_mail_mail.asp
    return mail($to,$subject,$message,$headers);
}

?>