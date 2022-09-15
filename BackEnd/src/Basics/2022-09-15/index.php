<?php

require_once 'vendor/autoload.php';

use App\Classes\FormBuilder;
 
$form = new FormBuilder;
 
echo $form->open('index.php?action=1', 'POST');
// <form action="index.php" method="POST">
echo $form->label('some-id');
// <label for="some-id">
echo $form->input('text', 'Enter value', '');
echo $form->input('password', 'Enter password', '');
// echo $form->password('Enter password');
echo $form->textarea('Enter text');
echo $form->submit('go');
echo $form->close();
// </form>