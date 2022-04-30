<?php
    function hap($n) {
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        return $sum;
    }

    echo "1~10 합계 : ".hap(10)."<br>";
    echo "1~100 합계 : ".hap(100);
?>