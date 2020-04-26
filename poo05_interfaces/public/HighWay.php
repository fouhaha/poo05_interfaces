<?php

abstract class HighWay
{

    protected $nbLane;

    protected $maxSpeed;

    protected $currentVehicles = [];


    abstract public function addVehicule(Vehicle $vehicle);


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        if($nbLane > 0){
            $this->nbLane = $nbLane;
        }
    }

    public function maxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        if($maxSpeed >= 0){
            $this->maxSpeed = $maxSpeed;
        }
    }
}