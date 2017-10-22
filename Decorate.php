<?php

class Config
{
    public $CoffeePrice;
    public $MilkPrice;
    public $Currency;

    /**
     * Config constructor.
     * @param int $CoffeePrice
     * @param int $MilkPrice
     */

    public static function initial($country)
    {
        return new $country;
    }
}

class Coffee
{
    public $totalPrice;
    public $components = [];
    public $coffee;

    /**
     * Coffee constructor.
     * @param $country*/
    public function __construct($coffee)
    {
        $this->coffee = $coffee;
    }
    /**
     * @return array
     */
    public function getReceipt()
    {
        $receipt = '';
        $config = Config::initial($this->country);
//        print_r($config);
        foreach ($this->components as $component){

            $receipt .= key($component)."........".current($component)." ". $config->Currency . PHP_EOL;
        }
        $receipt .= 'Total: ...... '.$this->totalPrice .' ' . $config->Currency;
        return array  ($receipt);
    }
}

abstract class BaseCoffeeDecorator
{
    protected $price = 0;

    public function __construct(Coffee $coffee)
    {
        $config = Config::initial($coffee->country);
        print_r($config);
        $priceName = $this->name."Price";
        $this->price = $config->$priceName;
        $coffee->components[] = [$this->name => $this->price];
        $coffee->totalPrice += $this->price;
    }
}

class CoffeDecorator extends BaseCoffeeDecorator
{
    protected $name = 'Coffee';
}

class MilkDecorator extends BaseCoffeeDecorator
{
    protected $name = 'Milk';
}


class Americano extends Coffee
{

    public static function recipe($coffee)
    {
        new CoffeDecorator($coffee);
        new CoffeDecorator($coffee);
        new MilkDecorator($coffee);
        return $coffee;
    }
}

class Cappucino extends Coffee
{

    public static function recipe($coffee)
    {
        new CoffeDecorator($coffee);
        new MilkDecorator($coffee);
        new MilkDecorator($coffee);
        return $coffee;
    }
}

class CoffeMachine
{
    public $country;
    /**
     * CoffeMachine constructor.
     * @param $country
     */
    public function __construct($country)
    {
        $this->country = $country;
    }


    public function makeCoffee($coffee)
    {
        $cup = new Coffee($coffee);

        $result = Americano::recipe($cup); //заглушка строки выше
        print_r ($result);
        return $result->getReceipt($this->country);
    }
}

class Ukraine extends Config
{
    public $CoffeePrice = 10;
    public $MilkPrice = 5;
    public $Currency = 'UAH';
}

class Spain extends Config
{
    public $CoffeePrice = 1;
    public $MilkPrice = 0.5;
    public $Currency = 'EUR';
}

$CoffeeMachine = new CoffeMachine('Ukraine');

$coffee = $CoffeeMachine->makeCoffee('americano');
