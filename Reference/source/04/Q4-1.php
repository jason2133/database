<?php
    function tri_area($w, $h) {
        $result = $w * $h * 0.5;

        return $result;
    }

    $width = 12;           // 삼각형의 너비
    $height = 10;           // 삼각형의 높이

    $area = tri_area($width, $height);

    echo "삼각형의 너비 : ".$width."cm<br>";
    echo "삼각형의 높이 : ".$height."cm<br>";
    echo "삼각형의 넓이는 ".$area."cm2 입니다.";
?>
