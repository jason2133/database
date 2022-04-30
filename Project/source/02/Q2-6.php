<h2>입장료 계산하기</h2>
<?php
   	$child = 5000;     	// 소인 입장료
    $num1 = 3;		    // 소인 인원 
    $adult = 8000;		// 대인 입장료
  	$num2 = 2;		    // 대인 인원

 	$total = $child * $num1 + $adult * $num2;   // 전체 입장료

  	echo "소인 입장료 : ".$child."원<br>";
    echo "소인 인원 : ".$num1."명<br>";
    echo "대인 입장료 : ".$adult."원<br>";
    echo "대인 인원 : ".$num2."명<br>";
 	echo "- 전체 입장료 : ".$total."원";
?>