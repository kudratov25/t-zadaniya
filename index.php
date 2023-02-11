<?php
class car
{

    public $name;
    public $year;

    protected $km;
    private $ownerName;
    public function __construct($name, $year, $km, $ownerName)
    {
        $this->name = $name;
        $this->year = $year;
        $this->km = $km;
        $this->ownerName = $ownerName;
    }
    public function getKm()
    {
        return $this->km;
    }

    public function getOwnerName($ownerName)
    {
        return $this->ownerName;
    }
}

$tesla = new car('audi', '2019', '3000', 'usmon');
// $tesla->km = 12;
echo $tesla->getKm();
echo '<br>';
echo $tesla->getOwnerName('usmon');

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
// $car = new electroCar('tesla', '123 dollar');
// $car->hours = 123;
// var_dump($car->setName('tesla'));
