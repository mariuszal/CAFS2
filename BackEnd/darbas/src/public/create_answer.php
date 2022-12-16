<?php
require_once "connections.php";

function handleInputs()
{
    $data = $_POST;

    $user_id = $_GET['user_id'];
    $page = $_GET['page'];
    $chapter = getChapter($page);
    $min = 1;
    $max = count($chapter);
    $nextPage = ($page + 1);
    
        $answers = get('answers', $user_id);

        $jsonContent = $answers['content'];
        $content = json_decode($jsonContent, true);
        
        $newContent = array_merge(($content ?? []), $data);
        $newJsonContent = json_encode($newContent);

        updateRow('answers', ['content' => $newJsonContent], $user_id);
        
        if($nextPage > $max) 
        {
            header("Location: user_success.php?user_id={$user_id}");
        
        } else 
        {
        header("Location: list.php?user_id={$user_id}&page={$nextPage}");
        }
    exit;
}
handleInputs();
