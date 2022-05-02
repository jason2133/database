<?php
    $sum = 0;
   	for ($i=1; $i<=100; $i++) {
        if ($i%3 == 0)
            $sum += $i; 
    }

    echo "1에서 100까지 3의 배수 합계 : ".$sum;
?>