<?php
require_once "connections.php";

if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
} else 
{
    $user_id = null;
    http_response_code(400);
    exit('PARAMETER EXPECTED');
}

function adminMenu()
{
    $line = "| <a href='user_add.php'>Įdėti klientą</a> | ";
    $line .= "<a href='user_list.php'>Aktyvių sąrašas</a> | ";
    $line .= "<a href='user_list.php?deleted=1'>Ištrintieji</a> | ";
    return $line;
}

function userAnswers()
{
    $user_id = $_GET['user_id'];
    $content = "";
    if($user_id) {
        $user = get('users', $user_id); 
        $answers = get('answers', $user_id);
        $jsonContent = json_decode($answers['content'], true);
        // dd($jsonContent);
        // if(isset($jsonContent)) {
        if(!$jsonContent) {
            $content .= "<tr>
                            <td width='100'>Klausimai</td>
                            <td class='error'>dar neatsakinėjo</td>
                        </tr>";
        } else {
            foreach($jsonContent as $q => $key) {
                $content .= "<tr>
                                <td width='100'>{$q}</td>
                                <td align='left'>{$key}</td>
                            </tr>";
                }
            } 
    } else { 
        $content .= ""; 
        }
    return $content;
}

function userInfo() 
{
    $user_id = $_GET['user_id'];
    if($user_id) {
        $user = get('users', $user_id); 
        }
    $user_content = '';
    $user_content .= "
                    <tr>
                    <td width='100'>Vardas</td>
                    <td width='100'>{$user['first_name']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Pavardė</td>
                    <td width='100'>{$user['last_name']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Email</td>
                    <td width='100'>{$user['email']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Pravertė puslapių</td>
                    <td width='100'>{$user['statistic']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Komentaras</td>
                    <td width='100'>{$user['short_description']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Sukurtas</td>
                    <td width='100'>{$user['created_at']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Redaguotas</td>
                    <td width='100'>{$user['updated_at']}</td>
                    </tr>
                    <tr>
                    <td width='100'>Deaktyvuotas</td>
                    <td width='100'>{$user['deleted_at']}</td>
                    </tr>";
                    
    return $user_content;
}

require_once "./resources/views/user_info.phtml";
