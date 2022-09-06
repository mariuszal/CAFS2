<?php
session_start();

require_once 'action.php';

if($_GET['code'] !=''){
    $link = getUrl($_GET['code']);
    if($link) {
        // echo $link;
        header('Location: ' . $link);
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}