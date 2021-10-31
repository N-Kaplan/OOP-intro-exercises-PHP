<?php

declare(strict_types=1);

/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen
create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/

class Beer4 extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    public function __construct($name, $alcoholpercentage, $color, $price, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }
    public function whereToDrinkWhat(): string
    {
        return "You can drink $this->name at " . $this::BARNAME. ".";
    }
}


echo "<br>exercise 6 <br>";

$duvel = new Beer4("Duvel", 8.5, "blond", 3.5);

var_dump($duvel);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getName() . ": alcohol percentage is " . $duvel->getAlcoholpercentage() ."%.<br>";
//echo $duvel->name . ": alcohol percentage is " . $duvel->alcoholpercentage ."%<br>";
echo "<br>Bar's name: " . Beer4::BARNAME . "<br>";
echo "<br>". $duvel->whereToDrink();
echo "<br>". $duvel->whereToDrinkWhat(). "<br>";