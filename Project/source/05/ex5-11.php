<?php
    $tel = "2022-10-30";
    $tel2 = str_replace("-", "/", $tel);
    echo $tel2."<br>";

    $str = "안녕하세요.\n반갑습니다.";
    $str2 = str_replace("\n", "<br>", $str);
    echo $str2;
?>