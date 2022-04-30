<?php
    $string = "";

    $string .= "<table border='1'>";
    $string .= "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    for ($c=-10; $c<= 30; $c+=10) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        $string .= "<tr><th>$c</th><th>$f</th>";
    }
    $string .= "</table>"; 

    echo $string;
?>