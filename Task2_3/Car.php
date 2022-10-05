<?php


abstract class Car
{
    public $name;
    public $year;
    public $color;
    public function __construct($name, $year, $color)
    {
        $this->name = $name;
        $this->year = $year;
        $this->color = $color;
    }
    abstract public function intro();
}
