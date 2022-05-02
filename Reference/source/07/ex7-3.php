<?php
    class Triangle {
        public $width;
        public $height;
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea() {
            $area = $this->width * $this->height * 0.5;
            return $area;
        } 
    }

    $tri1 = new Triangle(10, 5);
    echo "삼각형의 넓이 : ".$tri1->getArea();
?>