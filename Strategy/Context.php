<?php

require "Strategy.php";

class Context implements Strategy
{
    public function calculation($number1, $number2)
    {
        echo $number1 + $number2;
    }
}