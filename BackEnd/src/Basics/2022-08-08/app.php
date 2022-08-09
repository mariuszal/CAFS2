<?php
require_once 'functions.php';
if(isset($_POST)) {
    $value = isset($_POST['languageCode']) ? $_POST['languageCode'] : '';
    if(!$value) {
        echo "Please select at least one of coding language. <br><a href='javascript:history.back()'>Go Back</a>";
    } else {
        $message = "%s %s registruojasi i <strong>%s</strong> kursus.<br>Miestas %s.<br>Papildoma informacija: %s";
        $txt = sprintf($message,$_POST['firstName'], $_POST['lastName'], implode(' ', $_POST['languageCode']), ucfirst($_POST['city']), $_POST['about']);
        echo $txt;
        if (isset($_FILES['some-file-name'])) {
            $file = $_FILES['some-file-name'];
            echo uploadFile($file);
            
     }
    }
}




