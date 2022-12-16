<?php
require_once "connections.php";


function adminMenu()
{
    $line = "| <a href='user_add.php'>Įdėti klientą</a> | ";
    if (isset($_GET['deleted'])) {
        $line .= "<a href='user_list.php'>Aktyvių sąrašas</a> | ";
    } else {
        $line .= "<a href='user_list.php?deleted=1'>Ištrintieji</a> | ";
    }
    return $line;
}

function userList() {
    $deleted = $_GET['deleted'] ?? '';

    if($deleted){
        $users = getAllDeleted('users'); 
    }else{
        $users = getAll('users'); 
    }

    $url = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/list.php?user_id=";
    $urlForUserInfo = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/user_info.php?user_id=";

    $count = count($users);
    $user_content = '';

    foreach ($users as $user) 
    {
        if($user['short_description']) 
        { 
        $comments = "<div class='tooltip'><img src='img/info.png' width='15'><span class='tooltiptext'>{$user['short_description']}</span></div>";
        } else { $comments = ''; }
        
        $actionButtons = $deleted ? '<a href=\'user_action.php?restore='.$user['user_id'].'\'><img src=\'img/restore.png\' width=\'15\' alt=\'atkurti\'></a> 
                                        <a href=\'user_action.php?remove='.$user['user_id'].'\'><img src=\'img/trash.png\' width=\'20\' alt=\'Ištrinti is DB\'></a>' : 
                                    '<a href=\'user_action.php?sendmail='.$user['user_id'].'&url='.$url.''.$user['user_id'].'\'><img src=\'img/notifi.png\' width=\'20\'></a> 
                                    <a href=\'user_action.php?delete='.$user['user_id'].'\'><img src=\'img/delete.png\' width=\'15\' alt=\'trinti\'></a> 
                                    <a href=\'user_edit.php?user_id='.$user['user_id'].'\'><img src=\'img/edit.png\' width=\'15\' alt=\'redaguoti\'></a>';
        $user_content .= "<tr>
                            <td>{$user['id']}</td>
                            <td><a href='{$urlForUserInfo}{$user['user_id']}'>{$user['first_name']}</a></td>
                            <td>{$user['last_name']}</td>
                            <td>{$user['email']}</td>
                            <td>{$comments}</td>
                            <td><a href='{$url}{$user['user_id']}'>{$url}{$user['user_id']}</a></td>
                            <td>{$actionButtons}</td>
                            ";
    }

    $user_content .= "</tr>";
    return $user_content;
}

require_once './resources/views/user_list.phtml';
?>