<?php
require_once "connections.php";

$user_id = null;

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $user = getUsers($user_id);
    // dd($user);
    if(!$user) {
       $user_id = null;
       http_response_code(403);
        exit('ERROR!!!!!');
    }
    $user_id = $user['user_id'];
     
    if (!$user_id) {
        // dd($user_id);
        http_response_code(403);
        exit('ERROR!!!!!');
    }
} else {
    http_response_code(400);
    exit('PARAMETER EXPECTED');
}
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '1';
}

function getQuestionsList($page, $user_id) 
{    
        $userStat = getUsers($user_id);
        $stat = $userStat['statistic'];
        $stat = $stat+1;
        updateRow('users', ['statistic' => $stat], $user_id);
    
    $chapter_name = getChapterName($page, $user_id);
    $chapter = getChapter($page);
    $min = 1;
    $max = count($chapter);

    if($page < $min || $page > $max) {
        http_response_code(403);
        exit('ERROR!!! bad page number');
    }

    $r ='';
    $r .= "<h2>. . : : {$chapter_name[0]['chapter_name']}</h2><br>";

    $allQuestions = getQuestions($page);
    $answ = get('answers', $user_id);
    $jsonContent = json_decode($answ['content'], true);
    
    $r .= "<form action='create_answer.php?user_id={$user_id}&page={$page}' method='POST'>";

    for($i=0;$i < count($allQuestions);$i++) 
    {        
        $questionNr = $allQuestions[$i]['question_nr'];
        $question = $allQuestions[$i]['question'];

        $r .= "{$questionNr}. {$question}<br>";

        if($allQuestions[$i]['section_nr'] == 0) 
        {
            $jsonValue = $jsonContent['question_'.$questionNr.''] ?? '';
            $r .= "<textarea type='text' name='question_{$questionNr}' rows='5' cols='70'>{$jsonValue}</textarea><p>";
        } else {
        for($index=1;$index<=5;$index++)
        {
            $selected = $jsonContent['question_'.$questionNr.''] ?? '';
            $r .="<label for='question_{$questionNr}-{$index}'>{$index}</label><input type='radio' id='question_{$questionNr}-{$index}' name='question_{$questionNr}' value='{$index}'";
            if($index == $selected) 
            {
                $r .= "checked>";
            } else {
                $r .= ">";
            }
         }
        }
        $r .= "<br>";
    }
    $r .= "<button type='submit'>..:: pildyti ::..</button></form>";
    $r .= pages($min, $max, $page, $user_id);
    return $r;
}

function pages($min, $max, $page, $user_id)
{
    $url = "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['SERVER_NAME']}{$_SERVER['PHP_SELF']}";
    $r = '<section id="pagination">';

    for($i=$min;$i <= $max; $i++) 
    {
        if($i == $page) {
            $r .= "<span class='is-current-page'>{$page}</span>";
        } else {
            $r .= "<span><a href='{$_SERVER['PHP_SELF']}?user_id={$user_id}&page={$i}'>{$i}</a></span>";
        }
    }
    $r .= "</section>";
    return $r;
}

require_once "./resources/views/list.phtml";
