<?php
class Circle {
    private $radius;
    private $color;

    public function __construct($radius,$color = null)
    {
        $this->radius = $radius;
        $this->color = $color;
        
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function area()
    {
        return pi() * pow($this->getRadius(), 2);
    }

    public function perimeter()
    {
        return pi() * 2 * $this->getRadius();
    }
}