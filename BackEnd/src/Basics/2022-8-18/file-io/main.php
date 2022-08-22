<?php

$data = file_get_contents('./posts.json');
$data = json_decode($data, TRUE);

var_dump($data);

$user = [
    'name' => 'K',
    'surname' => 'C',
    'age' => 31
];

file_put_contents(__DIR__ . '/user.json', json_encode($user));
