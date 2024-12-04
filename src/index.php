<?php
require '../vendor/autoload.php';


$binary_number = '110110';

$decimal_number = dechex(bindec($binary_number));
echo PHP_EOL.'Number: '.$binary_number;
echo 'Converted: '.$decimal_number;

$circle = new \App\Circle(50);
for($i = 0; $i < 10; $i++)
{
    echo App\CircleController::drawCircle($circle);
}
