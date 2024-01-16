<?php
class ape extends animal
{
    public function __construct($name, $legs = 2, $cold_blood = "no")
    {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blood = $cold_blood;
    }

public function yell()
    {
    echo "Auooo";
    }
}