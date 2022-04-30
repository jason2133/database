<?php
    echo "<table border='1'>";
    echo "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    for ($c=-10; $c<= 30; $c+=5) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        echo "<tr><th>$c</th><th>$f</th>";
    }
    echo "</table>"; 
?>