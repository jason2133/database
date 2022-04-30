<?php
   for ($i=2; $i<=9; $i++) {
        echo $i."단 : ";
        for ($j=1; $j<=9; $j++) {
            $x = $i * $j;
            echo $i."x".$j."=".$x." ";
        }
        echo "<br>";
    }
?>