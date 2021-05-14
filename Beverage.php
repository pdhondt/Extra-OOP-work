<?php


class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;


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
    public string $name;
    public float $alcoholpercentage;

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
}

$cola = new Beverage('black', 2);

echo $cola->getInfo();
echo $cola->temperature . PHP_EOL;

$duvel =  new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
echo $duvel->getAlcoholpercentage() . '%' . PHP_EOL;
echo $duvel->alcoholpercentage . '%' . PHP_EOL;
echo $duvel->color . PHP_EOL;
echo $duvel->getInfo();
echo $cola->getAlcoholpercentage();
