<?php

// var_dump($_POST);
if(isset($_POST)) {
    $message = "%s %s registruojasi i %s kursus.<br>Miestas %s.<br>Papildoma informacija: %s";
    $txt = sprintf($message,$_POST['firstName'], $_POST['lastName'], implode(' ', $_POST['languageCode']), ucfirst($_POST['city']), $_POST['about']);
    echo $txt;
}




