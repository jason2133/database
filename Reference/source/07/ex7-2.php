<?php
    class Rectangle {
        public $width;
        public $height;
        public function getLength() {
            return ($this->width*2 + $this->height*2);
        } 
        public function getArea() {
            return ($this->width * $this->height);
        }         
    }

    $rect1 = new Rectangle();

    $rect1->width = 20;
    $rect1->height = 10;

    echo "너비 : ".$rect1->width."<br>";
    echo "높이 : ".$rect1->height."<br>";
    echo "사각형 둘레 길이 : ".$rect1->getLength()."<br>";
    echo "사각형 넓이 : ".$rect1->getArea();
?>