<?php
require('data.php');

function optionFunction($arr) {
    $r = '';
    for ($i=0; $i < count($arr); $i++) { 
        $value = strtolower($arr[$i]);
        $name = ucfirst($arr[$i]);
        $r .= "<option value='{$value}'>{$name}</option>";
    }
    return $r;
}

function checkBoxFunction($inputeName, $arr, $checkboxPosiotion) {
    // jeigu paduota $checkbocPosition = 0, checkbox bus pries teksta, jeigu kita reiksme
    //    tada checkbox bus po teksto,
    $r = '';
    for ($i=0; $i < count($arr); $i++) {
        $value = strtolower($arr[$i]);
        $label = "<label for='{$value}'> {$arr[$i]} </label>";
        $inpute = "<input type='checkbox' name='{$inputeName}[]' id='{$value}' value='{$arr[$i]}'>";
        if($checkboxPosiotion == 0) {
            $r .= $inpute . $label . "<br>";
        } else {
            $r .= $label . $inpute . "<br>";
        }
    }
    return $r;
}