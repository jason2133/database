<?php
    class Circle {
        public $r;

        public function __construct($r) {
            $this->r = $r;
        }
        public function getArea() {
            $area = $this->r * $this->r * 3.14;
            return $area;
        } 
    }

    $circle1 = new Circle(5);

    echo "반지름 : ".$circle1->r."<br>";
    echo "원의 면적 : ".$circle1->getArea();
?>