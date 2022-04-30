<?php
    class Person {
        public $name;
        public $age;
        public function intro() {
            echo "이름 : ".$this->name.", 나이 : ".$this->age;
        }
    }

    // 객체 생성
    $hong = new Person();

    $hong->name = "홍길동";
    $hong->age = 20;

    $hong->intro();
?>