<?php
    function cal_price($cat, $grp, $a) {       
        if ($cat=="할인 대상자") {             // 할인 대상자
            if ($grp=="개인")                  // 개인
                if ($a<=7)                     // 어린이
                    $money = 5000;
                elseif ($a>=8 and $a<=18)       // 청소년
                    $money = 6000;
                else                            // 어른
                    $money = 8500;
            else                               // 단체
                if ($a<=7)                      // 어린이
                    $money = 4000;
                elseif ($a>=8 and $a<=18)       // 청소년
                    $money = 5000;
                else
                    $money = 7500;                // 어른
        }
        else {                                  // 일반
            if ($grp=="개인")                  // 개인
                if ($a<=7)                     // 어린이
                    $money = 6000;
                elseif ($a>=8 and $a<=18)       // 청소년
                    $money = 7000;
                else                            // 어른
                    $money = 9500;
            else                               // 단체
                if ($a<=7)                      // 어린이
                    $money = 5000;
                elseif ($a>=8 and $a<=18)       // 청소년
                    $money = 6000;
                else
                    $money = 8500;                // 어른     
        }

        return $money;
    }

    $category = "일반";
    $group = "개인";
    $age = 15;

    $price = cal_price($category, $group, $age);

    echo "구분 : ".$category."<br>";
    echo "개인/단체 : ".$group."<br>";
    echo "나이 : ".$age."<br>";
    echo "입장료는 ".$price."원 입니다.";
?>
