<?php
class Car {
    private string $color = 'yellow';
    private int $currentSpeed1 = 150;
    private int $nbWheels = 4;
    private int $nbSeats = 5;
    private string $energy = 'gas';
    private int $energyLevel;

    public function __construct(string $color,int $nbSeats,string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}
 function start() 
{
    var_dump($this);
}


public function forward(): string
    
{
    $this->currentSpeed1 = 15;
    return "Go !";
}
public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed1 > 0) {
       $this->currentSpeed1--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
 
}
public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}
public function getCurrentSpeed(): int
{
    return $this->currentSpeed1;
}
public function setCurrentSpeed(int $currentSpeed1): void
{
  if($currentSpeed1 >= 0)
    $this->currentSpeed1 = $currentSpeed1;
}
public function getNbWheels(): int
{
    return $this->nbWheels;
}
public function setNbWheels(int $nbWheels): void
{
    $this->nbWheels = $nbWheels;
}
public function getEnergy(): string
{
    return $this->energy;
}
public function setEnergy(string $energy): void
{
    $this->energy = $energy;
}
public function getNbSeats(): int
{
    return $this->nbSeats;
}
public function setNbSeats(int $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}
public function getEnergyLevel(): int
{
    return $this->energyLevel;
}
public function setEnergyLevel(int $energyLevel): void
{
    $this->energyLevel = $energyLevel;
}
}


    