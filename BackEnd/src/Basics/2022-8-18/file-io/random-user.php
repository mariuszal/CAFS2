<?php

$data = file_get_contents('https://randomuser.me/api/?results=10');
$data = json_decode($data, true);
$fileName = "ready.csv";
// var_dump($content);

function arrayFlatten($array) {
    $return = [];
    foreach ($array as $key => $value) {
        if (is_array($value)) { 
            $return = array_merge($return, arrayFlatten($value));}
        else {$return[$key] = $value;}
    }
    return $return;
 
 }

$dataFlatKeys = arrayFlatten($data['results'], 'keys');
$csv = implode(',', $dataFlatKeys) . PHP_EOL;
$dataFlat = [];
foreach ($data['results'] as $key => $value) {
    $dataFlat[$key] = arrayFlatten($value);
}
foreach ($dataFlat as $key => $value) {
    $csv .= implode(',', $value) . PHP_EOL;
}

file_put_contents($fileName, $csv);


echo sprintf("<a href='%s'>Click to download</a>", $fileName);
