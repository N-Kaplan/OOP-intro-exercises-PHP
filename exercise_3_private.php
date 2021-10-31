<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beer2 extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    public function __construct($name, $alcoholpercentage, $color, $price, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage . " %";
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getName()
    {
        return $this->name;
    }
    public function beerInfo()
    {
        return "<br>Hi i'm {$this->getName()} and have an alochol percentage of {$this->getAlcoholpercentage()} and I have a {$this->getColor()} color.<br>";
    }
}

echo "<br>exercise 3 <br>";

$duvel = new Beer2("Duvel", 8.5, "blond", 3.5);

var_dump($duvel);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo "Alcohol percentage is " . $duvel->getAlcoholpercentage() ."<br>";
//echo "Alcohol percentage is " . $duvel->alcoholpercentage ."%<br>";

$duvel->setColor('light');
echo "<br>";
echo $duvel->getColor();
echo $duvel->beerInfo();