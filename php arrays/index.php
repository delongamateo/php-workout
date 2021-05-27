<?php

$cars_i_want = ["Aston Martin", "Bugatti", "Ferrari", "Lamborghini", "Maserati", "Mercedes", "Porche", "Skoda"];

var_dump($cars_i_want);

echo "<br>";

echo "For myself I would buy " . $cars_i_want[1] . "<br>";

echo "For my spouse I would buy " . $cars_i_want[3] . "<br>";

$cars_i_want[4] = "Smart";


echo "Each of my kids will get a " . $cars_i_want[4] . "<br>";



foreach ($cars_i_want as $car_name) {
    echo "<li>".$car_name."</li>";
};


$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];

echo "You can have Porsche for just " . $car_prices["Porsche 911"] . " CZK" . "<br>";

foreach ($car_prices as $model => $price) {
    echo "The price of " . $model . " is " . $price . " CZK " . "<br>";
}


?>

