<?php
    $point = "1300/3600/9000/200";

    $arr = explode("/", $point);

    for ($i=0; $i<count($arr); $i++) {
        echo $arr[$i]."점<br>";
    }
?>