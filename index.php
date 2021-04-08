<?php
include_once ('Cylinder.php');
$Circle1 = new Circle(3,Black);
$Cylinder1 = new Cylinder(3,Blue, 4 );
echo 'Hinh tron Circle1 co cac thong so: ';
echo "ban kinh la: ".$Circle1->getRadius()." ";
echo "Mau: ".$Circle1->getColor()." ";
echo "Dien tich ".$Circle1->area()." ";
echo "Chu vi ".$Circle1->perimeter()."<br/>";
echo 'Hinh tru Cylinder1 co cac thong so: ';
echo "ban kinh la: ".$Cylinder1->getRadius()." ";
echo "Mau: ".$Cylinder1->getColor()." ";
echo "Dien tich ".$Cylinder1->area()." ";
echo "The tich ".$Cylinder1->volume();