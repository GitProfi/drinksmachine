<?php

namespace Gitprofi\Drinksmachine;

class RandomDrink
{
    private $drinks = ['Wasser','Saft','Cola'];

    public function getDrink() : string {
        return $this->drinks[array_rand($this->drinks)];
    }
}