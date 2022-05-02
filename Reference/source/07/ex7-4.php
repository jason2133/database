<?php
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function __destruct() {
            echo "이름은 ".$this->name."입니다.";
        }
    }

    $person1 = new Person("홍길동");
?>