<?php
include_once ('Circle.php');
class Cylinder extends Circle {
    private $height;
    public function __construct($radius, $color = null, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function area()
    {
        return parent::area()*2 + parent::perimeter()*$this->height;
    }
    public function volume()
    {
        return parent::area()*$this->getHeight();
    }
}
