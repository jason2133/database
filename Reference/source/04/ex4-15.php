<?php 
    $score = array(array(88, 98, 96, 77, 98), 
                array(86, 77, 86, 84, 95),
                array(84, 83, 95, 86, 93));

    for ($i=0; $i<3; $i++) {
        for ($j=0; $j<5; $j++)
            echo "[".$i."]"."[".$j."] : ".$score[$i][$j]."<br>";

        echo "<br>";
    }
?>
