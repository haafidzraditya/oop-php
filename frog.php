<?php
class frog extends animal
{
    public function __construct($name, $legs = 4, $cold_blood = "no")
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blood = $cold_blood;
    }

    public function jump()
    {
        echo "Hop hop";
    }
}