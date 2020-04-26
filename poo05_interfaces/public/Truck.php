<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $storageCapacity;
    private $energy;
    private $filling = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function fillingLevel(): string
    {
        $level = "in filling";
        if ($this->filling >= $this->storageCapacity) {
            $level = "full";
        }
        return $level;
    }

    public function fill()
    {
        if ($this->filling < $this->storageCapacity) {
            $this->filling += 1;
        }
    }

    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): string
    {
        return $this->storageCapacity;
    }

    public function setFilling($filling)
    {
        if($filling <= $this->storageCapacity) {
            $this->filling = $filling;
        }
    }

    public function getFilling(): int
    {
        return $this->filling;
    }

}