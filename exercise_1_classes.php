<?php

declare(strict_types=1);


/* EXERCISE 1
Create a class beverage.
Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getInfo function which returns "This beverage is <temperature> and <color>."
Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;
    public const BARNAME = "Het Vervolg"; //for ex. 6

    public function __construct($color, $price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo(): string
    {
        //return "This beverage is " . $this->temperature . " and " .$this->color . ".";
        return "This beverage is $this->temperature and $this->color.";
    }

    function whereToDrink(): string
    {
        return "You can drink this beverage at " . $this::BARNAME;  // for ex. 6
    }
}

echo "exercise 1 <br>";

$cola = new Beverage('black', 2);

var_dump($cola);
echo "<br>";
echo $cola->getInfo();
echo "<br>";
echo $cola->whereToDrink();