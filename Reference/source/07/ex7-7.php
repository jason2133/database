<?php
    class Member {
	    private $name;

	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->name = "홍길동";  // 접근 오류 발생
    echo "이름 : ".$mem->getName();
?>