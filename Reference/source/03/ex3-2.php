<?php
 	$pilgi = 65;
    $silgi = 90;
	$result = "불합격";
             
 	if ($pilgi >= 70 and $silgi >= 70) {
		$result = "합격";
	}

    echo "필기 점수 : ".$pilgi.", 실기점수 : ".$silgi."<br>";
    echo "결과 : ".$result;
?>