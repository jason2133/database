<?php
    echo "-------------------<br>";
    echo "마일 킬로미터<br>";
    echo "-------------------<br>";

    $mile = 10;
    while ($mile <= 50) {
        $km = $mile * 1.609344;
        $km = round($km, 2);
        echo $mile." &nbsp; ".$km."<br>";
        $mile += 10;
    }
    echo "--------------------";    
?>