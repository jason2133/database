<?php
    $n = 1;
    $count = 0;
    while ($n<=100) {
        if ($n%3 == 0)  {
            echo "$n ";
            $count++;

            if ($count%10 == 0)
                echo "<br>";
        }
        $n++;
    }
 ?>