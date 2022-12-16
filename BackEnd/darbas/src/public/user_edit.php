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
    function userEdit() 
    {
        $user_id = $_GET['user_id'];
        if($user_id) {
            $user = get('users', $user_id); 
        }
        $user_content = '';
        $user_content .= "
                        <tr>
                        <td width='100'>Vardas</td>
                        <td width='100'><input type='text' name='first_name' value='{$user['first_name']}'></td>
                        </tr>
                        <tr>
                        <td width='100'>Pavardė</td>
                        <td width='100'><input type='text' name='last_name' value='{$user['last_name']}'></td>
                        </tr>
                        <tr>
                        <td width='100'>Email</td>
                        <td width='100'><input type='text' name='email' value='{$user['email']}'></td>
                        </tr>
                        <tr>
                        <td width='100'>Pravertė puslapių</td>
                        <td width='100'>{$user['statistic']}</td>
                        </tr>
                        <tr>
                        <td width='100'>Komentaras</td>
                        <td width='100'><textarea type='text' name='short_description' rows='4' maxlength='1000'>{$user['short_description']}</textarea></td>
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
    
    require_once "./resources/views/user_edit.phtml";
    
    
