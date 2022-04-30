<?php
    class Rectangle {
        public $width;
        public $height;
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea() {
            return ($this->width * $this->height);
        }         
    }

    class Square extends Rectangle {   
        public function isSquare() {
            if($this->width == $this->height) {    
                    return true; // 정사각형인 경우
            } 
            else{
                    return false; // 직사각형이 아닌 경우
            }
        }
    }    

    $rect = new Square(10, 10);

    if ($rect->isSquare())
        echo "정사각형의 넓이 : ";
    else
        echo "직사각형의 넓이 : ";

    echo $rect->getArea();
?>