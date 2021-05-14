<?php


class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;


    /**
     * beverage constructor.
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

$cola = new Beverage('black', 2);

echo $cola->getInfo();
echo $cola->temperature . PHP_EOL;