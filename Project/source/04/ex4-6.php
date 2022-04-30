<?php
    function hap($n) {
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        echo $sum."<br>";
    }

    hap(10);
    hap(100);
?>