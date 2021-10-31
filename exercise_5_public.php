<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/


class Beverage2
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($color, $price, $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo(): string
    {
        //return "This beverage is " . $this->temperature . " and " .$this->color . ".";
        return "<br>This beverage is $this->temperature, $this->color and costs $this->price euro.<br>";
    }

    function setPrice($price): void
    {
        $this->price = $price;
    }
}

echo "<br>exercise 5 <br>";

$cola = new Beverage2('black', 2);

var_dump($cola);
echo "<br>";
echo $cola->getInfo();
echo "<br>";
$cola->setPrice(3.5);
echo $cola->getInfo();