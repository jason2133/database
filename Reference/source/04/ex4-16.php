<?php 
    $score = array(array(88, 98, 96, 77, 98), 
                array(86, 77, 86, 84, 95),
                array(84, 83, 95, 86, 93));

    for ($i=0; $i<3; $i++) {
        $sum=0;                
       	for($j=0; $j<5; $j++)
	        $sum += $score[$i][$j];      
         
       	$avg = $sum/5;
       	$number = $i + 1;
       	
        echo($number."번 학생의 합계 : ".$sum.", 평균 : ".$avg."<br>");
    }
?>
