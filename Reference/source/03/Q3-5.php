<?php
    $count = 0;
    for ($n=300; $n<=350; $n++) {
        if ($n%5 != 0)  {
            echo "$n ";
            $count++;

            if ($count%10 == 0)
                echo "<br>";
        }
    }
 ?>