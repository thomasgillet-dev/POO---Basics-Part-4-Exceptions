<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storageCapacity;

    private $actualStorage;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function setActualStorage(int $actualStorage): void
    {
        if($actualStorage >= 0){
            $this->actualStorage = $actualStorage;
        }
    }

    public function getActualStorage(): string
    {
        if ($this->actualStorage < $this->storageCapacity) {
            return "in filling";
        }
        else {
            return "full";
        }
        
    }

}