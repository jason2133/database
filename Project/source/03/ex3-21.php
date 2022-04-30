<?php
    $string = "";
    $string .= "<table border='1'>";
    for ($i=2; $i<=9; $i++) {
        $string .= "<tr>";
        for ($j=1; $j<=9; $j++) {
            $x = $i * $j;
            $string .= "<td>".$i."x".$j."=".$x."</td>";
        }
        $string .= "</tr>";
    }
    $string .= "</table>";

    echo $string;
?>