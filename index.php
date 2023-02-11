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

    public function getOwnerName()
    {
        return $this->ownerName;
    }
}


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
    // you can display data with public method in child class
    public function getKm()
    {
        return $this->km;
    }

    // you can not display data in child class with any way
    // public function getOwnerName()
    // {
    //     return $this->ownerName;
    // }
}
$tesla = new electroCar('tesla', 2019, 3450, 'abdulla');
echo $tesla->getOwnerName();
// $tesla = new car('bmw', 2020, 1230, 'john');
// echo $tesla->getOwnerName('abdulla');