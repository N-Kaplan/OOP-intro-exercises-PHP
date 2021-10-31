<?php

declare(strict_types=1);

/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instance of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/

//note : For a static property, there is one copy of that variable for the whole class.

class Beverage3
{
    private string $color;
    private float $price;
    private string $temperature;
    public const BARNAME = "Het Vervolg"; //for ex. 6
    private static string $address = "Melkmarkt 9, 2000 Antwerpen"; // for ex. 7

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
    static function getAddress(): string
    {
        return self::$address;
    }
    public function getAddress2(): string
    {
        return self::$address;
    }
}

echo "<br>exercise 7 <br>";

//echo "<br>" . Beverage3::$address . "<br>"; //doesn't work because the property visibility is set to private.
echo "<br>" . Beverage3::getAddress() . "<br>";
