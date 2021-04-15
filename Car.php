<?php


class Car
{
    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color = 'blue';

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !!!!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Freine wsh !!!";
        }
        $sentence .= "T'as cassé le guidon d'arrêt";
        return $sentence;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Allez démarre José";
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function dump()
    {
        var_dump($this);
    }

}