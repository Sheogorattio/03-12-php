<?php

namespace App;

class Circle
{
    public int $diameter {
        get {
            return $this->diameter;
        }
        set {
            $this->diameter = $value;
        }
    }

    public function __construct($diameter)
    {
        $this->diameter = $diameter;
    }

}