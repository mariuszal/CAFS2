<?php
$book = [
    'title' => 'Gyvenimas ir likimas',
    'author' => 'Vasilij Grossman',
    'year' => 2022,
    'genre' => 'modernas'
];

$books = [
    [
        'title' => 'Kopa',
        'author' => 'Frank Herbert',
        'year' => 2021,
        'genre' => 'fantastika'
    ],
    [
        'title' => 'Ką žmonės dirba visą dieną',
        'author' => 'Richard Scarry',
        'year' => 2005,
        'genre' => 'vaikiska'
    ],
    [
        'title' => 'Desertai. 365 receptai',
        'author' => 'Terra Publica',
        'year' => 2018,
        'genre' => 'kulinarija'
    ]
];
var_dump($book);
var_dump($books);

function averange($arg1, $arg2){
    $avgOfArr = 0;
    for ($i=0; $i < count($arg2); $i++) { 
        $avgOfArr += $arg2[$i]['year'];
    }
    return ($avgOfArr + $arg1['year']) / (count($arg2) + 1);
}

echo "Knygu metu vidurkis: " . averange($book, $books);