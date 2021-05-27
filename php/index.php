<?php

$name = "Mateo";
$birth_month = "05";
$birth_day = "05";
$birth_date = $birth_month . "-" . $birth_day;
var_dump($birth_date);

define("DATE_OF_BIRTH_FORMAT", "m-d");

$today = date(DATE_OF_BIRTH_FORMAT);

var_dump($today);

$birth_year = 1997;

$this_year = date("Y");

if ($birth_date < $today) {
    echo $name . " turned " . ($this_year - $birth_year) . " this year.";
} else {
    echo $name . " will turn " . ($this_year - $birth_year) . " this year."; 
};

function getBirthdaySentence($name, $birth_year, $year) {
    return "In the year " . $year . $name . " turned " . ($year - $birth_year);
};

for ($numbers = 0; $numbers < ())



?>