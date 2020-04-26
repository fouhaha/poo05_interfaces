<?php


class ElectricBike extends Vehicle implements RechargeableInterface
{
    // … i

    public function charge(int percentage) :int
    {
        // you must implement this method
    }

    public function unLoad(int $percentage) :int
    {
        // you must implement this method
    }

}