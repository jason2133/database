<?php      
    $pay = 5000;        // 지불 금액
    $price = 1000;      // 물건 가격
    $num = 3;        // 구매 개수
    
    $change = $pay - $price * $num;     // 거스름돈

    echo "지불 금액 : $pay<br>";
    echo "물건 가격 : $price<br>";
    echo "구매 개수 : $num<br>";
    echo "- 거스름돈 : $change<br>";
?>