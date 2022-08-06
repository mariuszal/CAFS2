<?php
$weekDays = [
    'en' => [
        '1' => 'monday',
        '2' => 'tuesday',
        '3' => 'wednesday',
        '4' => 'thursday',
        '5' => 'friday',
        '6' => 'saturday',
        '6' => 'sunday'
    ],
    'lt' => [
        '1' => 'pirmadienis',
        '2' => 'antradienis',
        '3' => 'treciadienis',
        '4' => 'ketvirtadienis',
        '5' => 'penktadienis',
        '6' => 'sestadienis',
        '7' => 'sekmadienis'
    ]
];

var_dump($weekDays);

function dayName($date, $arg, $lang) {
    return $arg["{$lang}"][$date];
}

echo dayName(1, $weekDays, 'lt') . " : " . dayName(3, $weekDays, 'en') . "\n";

$date = date('N');
echo "siandien: " . dayName($date, $weekDays, 'lt');
echo "today: " . dayName($date, $weekDays, 'en');


