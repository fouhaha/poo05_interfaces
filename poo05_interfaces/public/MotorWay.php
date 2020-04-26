<?php

require_once 'HighWay.php';

class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Car)) {
            $this->currentVehicles[] = $vehicle;
        }
    }


}