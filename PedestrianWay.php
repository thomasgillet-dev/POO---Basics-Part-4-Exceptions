<?php

require_once 'HighWay.php';

final class PedestrianWay extends Highway
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}