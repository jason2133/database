<?php
    $seat = array(array(0, 0, 1, 0, 0, 0, 0, 1, 0, 0),
                array(0, 0, 0, 0, 1, 0, 1, 1, 0, 0),
                array(0, 0, 1, 1, 0, 0, 0, 0, 1, 0),
                array(0, 1, 0, 0, 0, 0, 1, 0, 0, 0),
                array(0, 0, 0, 0, 1, 0, 0, 0, 1, 0));

    for ($i=0; $i<count($seat); $i++) {
        for ($j=0; $j<count($seat[$i]); $j++) {
            if ($seat[$i][$j]==0)
                echo "□ ";
            else
                echo "■ ";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "□ : 예약 가능, ■ : 예약 불가능";
?>
