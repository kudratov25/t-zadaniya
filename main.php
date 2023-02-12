<?php

class Calculate
{
    public function summary($a, $b)
    {
        $summary = $a + $b;
        echo "summary($a + $b) = $summary";
    }
    public function generator($numbers = 10)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $numbers);
    }
}
$data = $argv[1];
$options = new Calculate();
if ($data == 'summary') {
    if (isset($argv[2], $argv[3])) {
        echo $options->summary($argv[2], $argv[3]);
    } else {
        echo 'please input two parametr after keyword summary';
    }
}
if ($data == 'generator') {
    if (isset($argv[2])) {
        echo $options->generator($argv[2]);
    }
    if (!isset($argv[2])) {
        echo $options->generator(10);
    }
}
if ($data == 'logger') {
} 
