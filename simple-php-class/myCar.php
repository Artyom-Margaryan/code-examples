<?php

use Car\Car;

$myCar = new Car;

$myCar->color = 'red';
$myCar->fuel = 50;

$myCar->go();
$myCar->turn();
$myCar->stop();