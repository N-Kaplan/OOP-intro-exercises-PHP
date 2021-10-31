<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beer3 extends Beverage
{
    protected string $name;
    protected float $alcoholpercentage;

    public function __construct($name, $alcoholpercentage, $color, $price, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function beerInfo(): string
    {
        return "<br>Hi i'm {$this->getName()} and have an alochol percentage of {$this->getAlcoholpercentage()} and I have a {$this->getColor()} color.<br>";
    }
}


echo "<br>exercise 4 <br>";

$duvel = new Beer3("Duvel", 8.5, "blond", 3.5);

echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getName() . ": alcohol percentage is " . $duvel->getAlcoholpercentage() ." % .<br>";
//echo $duvel->name . ": alcohol percentage is " . $duvel->alcoholpercentage ."%<br>";

echo $duvel->beerInfo();