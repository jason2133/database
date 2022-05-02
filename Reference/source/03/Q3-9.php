<?php
    $string = "";
    $string .= "<table border='1'>";
    $string .= "<tr><th width='100'>달러</th><th width='100'>원화</th><th width='100'>유로</th></tr>";

    for($won=10; $won<=20; $won+= 2) {
        $dollar = $won * 1180.60;
        $euro = $won * 1350.30;
        $string .= "<tr><td>$won</td><td>$dollar</td><td>$euro</td>";
    }
    $string .= "</table>";
    
    echo $string;
?>