<?php
    $tel = "010-1234-5678";
    $arr = explode("-", $tel);

    $tel2 = $arr[0].$arr[1].$arr[2];
    echo $tel2;    
?>