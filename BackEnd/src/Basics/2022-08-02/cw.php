<?php
// $name = 'marius';

// $varfunction = function($name)
// {
//     var_dump($name);
// };

// $varfunction($name);

// function getBonus() {
//     return 30;
// }

// $workers = [
//     [
//         'name' => 'a',
//         'salary' => 410
//     ],
//     [
//         'name' => 'b',
//         'salary' => 420
//     ],
//     [
//         'name' => 'c',
//         'salary' => 430
//     ],
// ];

// $bonus = getBonus();

// $workers = array_map(function($worker) use($bonus) {
//     $worker['salary'] += $bonus;
//     return $worker;
// }, $workers);

// var_dump($workers);

	
	
	
	

// Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().
$arr = ['a', 'b', 'c'];
var_dump($arr);

// Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.
var_dump($arr[0], $arr[1], $arr[2]);


// Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.
$arr[] = 'd';
echo "{$arr[0]} + {$arr[1]}, {$arr[2]} + {$arr[3]}\n";

// Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo. Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.
$arr = [2, 5, 3, 9];
$firstHalfOfArr = $arr[0] * $arr[1];
$lastHalfOfArr = $arr[2] * $arr[3];
$result = $firstHalfOfArr + $lastHalfOfArr;
echo "result: ". $result . "\n";

// Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.
$newArr = range(1,5);
var_dump($newArr);

echo "----------------------\n";
// Parašykite funkciją, kuri grąžina skaičiaus kvadratą. 
// Skaičius perduodamas kaip parametras.
function square($num) {
    if(is_integer($num)) {
        $r = $num * $num;
    } else {
        $r = "not a number";
    }
    echo $r."\n";
}	
square(3);

// Parašykite funkciją, kuri grąžina dviejų skaičių sumą. 
// Skaičiai perduodami funkcijos parametrus.
function sumOfTwoNumbers($a, $b) {
    if(is_integer($a) && is_integer($b)) {
        $r = $a + $b;
    } else {
        $r = "please enter only numbers";
    }
    echo $r."\n";
}
sumOfTwoNumbers(2,4);
// Parašykite funkciją, kuri iš antro parametro atima pirmą ir 
// padalija iš trečio.
function sumOfThreeNumbers($a, $b, $c) {
    if(is_integer($a) && is_integer($b) && is_integer($b)) {
        $r = ($b - $a) / $c;
    } else {
        $r = "please enter only numbers";
    }
    echo $r."\n";
}
sumOfThreeNumbers(2,3,4);
// Parašykite funkciją, kuri priima kaip parametrą skaičių 
// nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.
function dayOfWeek($num) {
    if(is_integer($num) && $num <= 7 && $num > 0){
        switch($num) {
            case 1:
                echo "pirmadienis\n";
                break;
            case 2:
                echo "antradienis\n";
                break;
            case 3:
                echo "treciadienis\n";
                break;
            case 4:
                echo "ketvirtadienis\n";
                break;
            case 5:
                echo "penktadienis\n";
                break;
            case 6:
                echo "sestadienis\n";
                break;
            case 7:
                echo "sekmadienis\n";
                break;
        }
    } else {
        echo "only num from 1 to 7\n";
    }
}
dayOfWeek(8);




for ($i=1; $i <= 9; $i++) { 
    for ($x=0; $x < $i; $x++) { 
      echo $i;  
    }
    echo "\n";
}

$a = 1;
while ($a <= 9) {
    for ($i=0; $i < $a; $i++) { 
        echo $a;
    }
    $a++;
    echo "\n";
}

