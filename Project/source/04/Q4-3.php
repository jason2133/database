<?php
    function besu_hap($n) {
        $sum = 0;
        for ($i=1; $i<=100; $i++)
            if ($i%$n == 0)
                $sum += $i;

        return $sum;
    }

    $besu = 5;
    $total = besu_hap($besu);

    echo "1~100 정수 중 ".$besu."의 배수 합계 : ".$total;
?>
