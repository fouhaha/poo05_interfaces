<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bus.php';

$bicycle = new Bike('blue', 1);
$bike = new Bike('purple', 1);
$skate = new Skateboard('black', 1);
$skateboard = new Skateboard('orange', 1);
$car = new Car('green', 4, 'electric');$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2, 'fuel');
$schoolBus = new Bus('yellow', 40);
$truck = new Truck('blue', 2, 'fuel', 10);


while($truck->fillingLevel() == "in filling") {
    $truck->fill();
    echo ($truck->fillingLevel() . "<br>");
}

echo $truck->forward();
echo ("<br>the truck's speed is : " . $truck->getCurrentSpeed() . " km/h.<br>");
echo $truck->brake();
echo ("<br>Speed of the truck : " . $truck->getCurrentSpeed() . " km/h.<br>");
$truck->setFilling(0);
echo ("the filling level is : " . $truck->getFilling() . "<br>");


echo $bicycle->forward();
echo "<br>";
echo $car->forward();
echo "<br>";
// var_dump(Car::ALLOWED_ENERGIES);


/*//////////////////    Partie Bike     /////////////////////*/

$bike = new Bike('green', 1);

/*//////////////////    MEMENTO  //////////////////////////////
//  $bike->color = "blue";
//  $bike->currentSpeed = 0;
//  $bike->setColor("blue");
*/

echo "Here is now the part about the Interface, with for instance, the functions switchOn() and swithOff(), telling about the state of the light on the vehicle :<br>";
$bike->setCurrentSpeed(0);
// var_dump($bike);
echo "The light of the bike is on? (1 for true, nothing for false) : " . $bike->switchOn() . "<br>";
echo "while its speed is presently of : " . $bike->getCurrentSpeed() . "km/h<br>";

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo "And here, is the light of the bike on? (1 for true, nothing for false) : " . $bike->switchOn() . "<br>";
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// var_dump($bike);
/*
$bike->dump();
*/

/*//////////////////    Partie Car     /////////////////////*/
/*
$car = new Car('blue', 2, 'plutonium');

echo $car->forward();
echo '<br> Speed of the car : ' . $car->getCurrentSpeed() . ' mph' . '<br>';
echo $car->brake();
echo '<br> speed of the car : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
*/





$motorWay = new MotorWay();
$motorWay->addVehicule($tesla);
$motorWay->addVehicule($ferrari);
// var_dump($motorWay);

$pedetrianWay = new PedestrianWay();
$pedetrianWay->addVehicule($bicycle);
$pedetrianWay->addVehicule($bike);
$pedetrianWay->addVehicule($skate);
$pedetrianWay->addVehicule($skateboard);
// var_dump($pedetrianWay);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicule($bicycle);
$residentialWay->addVehicule($bike);
$residentialWay->addVehicule($skate);
$residentialWay->addVehicule($skateboard);
$residentialWay->addVehicule($tesla);
$residentialWay->addVehicule($ferrari);
$residentialWay->addVehicule($schoolBus);
$residentialWay->addVehicule($truck);
// var_dump($residentialWay);
