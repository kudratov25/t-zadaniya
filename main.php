<?php
class summary
{
    // public $summary;
    public $number1;
    public $number2;



    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }
    public function calculate($number1, $number2)
    {
        if (isset($number1, $number2)){

        $summary = $number1 + $number2;
        return $summary;
    }

    }
    // public function calculate($summary)
    // {
    //     $this->summary = $summary;
    // }
}

$calculate = new summary('123', '123');
echo $calculate->calculate('123', '123');
// $calculate->calculate('123', '123');
// $setCalculate = $calculate->calculate('summary');
// echo $calculate->summary;
// echo 'this is summary';
