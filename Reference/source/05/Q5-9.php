<?php
    $arr = [];

    array_push($arr, "사과");
    array_push($arr, "오렌지");
    array_push($arr, "딸기");

    $str = join("/", $arr);

    echo $str;
?>