<?php

class Calculate
{
    public function summary($a, $b)
    {
        $summary = $a + $b;
        $this->addlog('summary' . ' ' . $a . ' ' . $b);
        echo "summary($a + $b) = $summary";
    }
    public function generator($numbers = 10)
    {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        $this->addlog('generator' . ' ' . $numbers);
        return substr(str_shuffle($data), 0, $numbers);
    }
    public function logger()
    {

        $file = "log/logger.log";
        $f = fopen($file, "r");
        while ($line = fgets($f, 100)) {
            print $line . "\n";
        }
        $this->addlog('logger');

    }
    public function start()
    {
        $this->addlog('app started');
    }
    public function addlog($log_data)
    {

        $log_filename = "log";
        if (!file_exists($log_filename)) {
            // create directory/folder uploads.
            mkdir($log_filename, 0777, true);
        }
        $log_data = date('Y-d-m H:i') . ' ' . $log_data;
        $log_file_data = $log_filename . '/logger' . '.log';
        // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
        file_put_contents($log_file_data, $log_data . "\n", FILE_APPEND);
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
    echo $options->logger();
}
if ($data =='start') {
    echo $options ->start();
}
