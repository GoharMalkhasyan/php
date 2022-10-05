<?php

require_once  "Car.php";
class Audi extends Car
{
    public function intro()
    {
        return "The care name is $this->name the year is $this->year the color is $this->color";
    }
}


