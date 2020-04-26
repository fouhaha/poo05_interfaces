<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    /**
     * @param int $nbSeats
     */
//    private $color;

//    private $currentSpeed;

    // [...]

    /**
     * @var integer
     */
//    public $nbSeats = 1;
    /**
     * @var integer
     */

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}

