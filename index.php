<?php
declare(strict_types=1);

require "exercise_1_classes.php";
require "exercise_2_extending.php";

//exercise 1

echo "exercise 1 <br>";

$cola = new Beverage('black', 2);

var_dump($cola);
echo "<br>";
echo $cola->getInfo();
echo "<br>";

// exercise 2:
//Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
//Also the name equal to Duvel and the alcohol percentage to 8,5%
//print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
//Make sure that each print is on a different line.
//Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
// echo $cola->getAlcoholpercentage(); calling a Beer (child class) method on a Beverage (parent class) object results in this error.

//USE TYPEHINTING EVERYWHERE!

echo "<br>exercise 2 <br>";

$duvel = new Beer("Duvel", 8.5, "blond", 3.5);

var_dump($duvel);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->name . ": alcohol percentage is " . $duvel->getAlcoholpercentage() ."<br>";
echo $duvel->name . ": alcohol percentage is " . $duvel->alcoholpercentage ."%<br>";
//echo $cola->getAlcoholpercentage();

