<?php

require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

/*$motorWay = new MotorWay();
$motorWay->setNbLane(4);
$motorWay->setMaxSpeed(130);
$motorWay->addVehicle(new Car('yellow', '4', 'fuel'));
$motorWay->addVehicle(new Bicycle('blue', 1));
var_dump($motorWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->setNbLane(1);
$pedestrianWay->setMaxSpeed(10);
var_dump($pedestrianWay);

$residentialWay = new ResidentialWay();
$residentialWay->setNbLane(2);
$residentialWay->setMaxSpeed(50);
var_dump($residentialWay);*/

$car1 = new Car('black', '5', 'fuel');
$car1->setParkbrake(false);
try 
{
    echo $car1->start();
}
catch(Exception $e)
{
    echo "Exception revieved : " . $e->getMessage() . '<br>';
    $car1->setParkBrake(false);
}
finally 
{
    echo "Ma voiture roule comme un donut";
}


