<?php
    function circle_area($r) {
        $result = $r * $r * 3.14;

        return $result;
    }

    $radius = 10;           // 반지름
    $area = circle_area($radius);

    echo "반지름 : ".$radius."<br>";
    echo "원의 넓이 : ".$area;
?>