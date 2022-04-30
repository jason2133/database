<?php
   	$my_color = "노랑";

    switch($my_color) {
        case "빨강" :
            echo "나는 ".$my_color."을 좋아합니다.";
            break;
        case "노랑" :
            echo "나는 ".$my_color."을 좋아합니다.";
            break;
        case "파랑" :    
            echo "나는 ".$my_color."을 좋아합니다.";
            break;
        default :
            echo $my_color."은(는) 내가 좋아하는 색상이 아닙니다.";
    }
?>