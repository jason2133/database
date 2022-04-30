<?php
    class Member {
	    public $name;

	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->name = "홍길동";  // 외부에서도 접근 가능
    echo "이름 : ".$mem->getName();
?>