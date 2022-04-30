<?php      
    class Hello {
        public $name = "홍길동";        // 프로퍼티(Property)

        function say_hello() {          // 메소드(Method)
            return $this->name."님 안녕하세요.";
        }
    }

    $message = new Hello();
    echo $message->say_hello();
    echo "<br>";

    var_dump($message);
?>