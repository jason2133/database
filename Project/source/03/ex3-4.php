<?php
   $height = 170;                // 키
   $weight = 40;                 // 몸무게
   $s = ($height-100)*0.9;       // 표준 체줄

   echo ("키 : $height <br>");
   echo ("몸무게 : $weight <br>");

    if ($weight>$s)
        echo ("다이어트 필요.");
    else 
        echo ("다이어트 불필요.");
?>