<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Bike) or ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}