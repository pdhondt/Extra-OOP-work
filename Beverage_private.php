<?php

class Beverage
{
    private string $color = "";
    private float $price = 0;
    private string $temperature = "";

    /**
     * Beverage constructor.
     */
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return sprintf('This beverage is %s and %s.', $this->temperature, $this->color) . PHP_EOL;
    }


}

class Beer extends Beverage
{
    private string $name = "";
    private float $alcoholpercentage = 0;

    /**
     * Beer constructor.
     * @param string $name
     * @param float $alcoholpercentage
     */
    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function beerInfo(): string
    {
        return sprintf("Hi, I'm %s and have an alcohol percentage of %s and I have a %s color.", $this->name, $this->alcoholpercentage, $this->getColor());
    }
}

$duvel =  new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
echo $duvel->getAlcoholpercentage() . '%' . PHP_EOL;
//echo $duvel->alcoholpercentage . '%' . PHP_EOL;
echo $duvel->getColor() . PHP_EOL;
echo $duvel->getInfo();
$duvel->setColor('light');
echo $duvel->getColor() . PHP_EOL;
$duvel->color = 'dark';
echo $duvel->getColor() . PHP_EOL;
echo $duvel->beerInfo() . PHP_EOL;




