<?php
var_dump($_SERVER['HTTP_USER_AGENT']);

var_dump($_SERVER['HTTP_X_REQUESTED_WITH'] ?? NULL);


var_dump($_GET);

var_dump($_POST);

if(isset($_POST['name'])) {
    var_dump($_POST['name']);
}

