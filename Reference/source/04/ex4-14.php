<?php   
    $member = array("id"=> "hong77", "pass"=>"12345", "name"=>"홍길동", "age"=>30); 

    foreach($member as $key=>$value) {
        echo "키 : ".$key.", 값 : ".$value;
        echo "<br>";
    }
?> 