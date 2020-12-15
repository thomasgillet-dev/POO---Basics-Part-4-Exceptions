<?php

abstract class HighWay
{
    protected $currentVehicles;

    private $nbLane;

    private $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    //setters
    public function setCurrentVehicles(array $currentVehicles) : void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    //getters
    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}