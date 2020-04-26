<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicule($vehicle)
    {
        if (($vehicle instanceof Vehicle)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}