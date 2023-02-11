<?php
class car
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function price()
    {
        return 'price';
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}

// $setName = new car('bmw', '1230');
// echo $setName->name;

// $setName->setName('bmw');
// echo $setName->name;


// $carPrice = new car();
// $carPrice->price = '400';
// $carName = new car();
// $carName->name = 'gentra';
// // echo $carPrice->price();
// echo $carName->name;
// echo '<br>';
// echo $carPrice->price;

// $bmw = new car();
// $gm = new car();
// $gm->name='gentra';
// $bmw ->name = 'gelick';
// echo $bmw->name;
// echo "\n";
// echo $gm->name;
// var_dump($gm);


class electroCar extends car
{

    public $battary;
    public $hours;
    public $name;
    public function chargingHours($hours)
    {
        return $hours;
    }
    public function setName($name)
    {
        return $this->name;
    }
}
$car = new electroCar('tesla', '123 dollar');
$car->hours = 123;
var_dump($car->setName('tesla'));
