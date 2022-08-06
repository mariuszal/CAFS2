<?php

const MIN_VALUE = 190092;
define('MAX_VALUE', 190092);

var_dump(MIN_VALUE, MAX_VALUE, __FILE__, __DIR__);


define('NEW_LINE', "<br>\n");
echo "";

echo $_SERVER['HTTP_USER_AGENT'];


$osName = `uname -a`;
echo $osName;

$secPerDay = 24 * 60 * 60;
echo "dienoje yra " . $secPerDay . " sekundziu";