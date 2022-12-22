<?php

namespace App;

abstract class Worker implements worker_interface{

    private string $name;
    private int $age;
    private array $hours;
    private string $position;
    private int $how_earn;

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }


    // abstract public function work();  // абстрактный метод

    public function setPosition($value): void   // сеттер
    {
        $this->position = $value;
    }

    public function getPosition(): string // геттер
    {
        return $this->position;
    }
    public function getName(): string // геттер
    {
        return $this->name;
    }

    public function getHours(): array // геттер
    {
        return $this->hours;
    }


}
