<?php
    class Customer {
	    public $name;
        public $address;
        private $phone;

        public function __construct($name, $address) {
            $this->name = $name;
            $this->address = $address;
        }
        public function setPhone($phone) {
		    $this->phone = $phone;
	    }
	    public function getPhone() {
		    return $this->phone;
	    }
    }

    $obj = new Customer("홍길동", "수원");
    $obj->setPhone("010-1234-5678");
    
    echo "이름 : ".$obj->name."<br>";
    echo "주소 : ".$obj->address."<br>";
    echo "전화번호 : ".$obj->getPhone();
?>