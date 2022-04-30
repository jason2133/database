<?php
    function hap($n1, $n2) {
        $sum = 0;
        for ($i=$n1; $i<=$n2; $i++)
            $sum += $i;

        return $sum;
    }

    $start = 10;
    $end = 50;

    $total = hap($start, $end);

    echo $start."에서 ".$end."까지의 정수 합계 : ".$total;
?>
