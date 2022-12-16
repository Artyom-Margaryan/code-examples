<?php

class Fibonacci_Sequence implements Iterator
{
    private $start;

    public function __construct($start = 0)
    {
        $this->start = $start;
    }

    public function current()
    {
        return round(
            (pow(((1 + sqrt(5)) / 2), $this->key) - pow((-1 / (1 + sqrt(5)) / 2), $this->key)) / sqrt(5)
        );
    }

    public function key()
    {
        return $this->key;
    }

    public function next()
    {
        $this->key++;
    }

    public function rewind()
    {
        $this->key = $this->start;
    }

    public function valid()
    {
        return true;
    }
}

$n = new Fibonacci_Sequence(0);

$i = 0;
foreach ($n as $value) {
    if ($i == 100) {
        break;
    }
    $i++;
    echo $value . PHP_EOL;
}