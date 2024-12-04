<?php

namespace App;

class CircleController
{
    public static function drawCircle(Circle $circle): string
    {
        return sprintf(
            "<div class=\"circle\" 
                style=\"
                float: left;
                background-color: blue;
                width: %spx; 
                height: %spx; 
                border-radius: %spx;\">
            </div>",
            $circle->diameter,
            $circle->diameter,
            $circle->diameter / 2
        );
    }
}
