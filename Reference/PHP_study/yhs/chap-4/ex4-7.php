<?php
echo "<B> ▣ 3과목의 총점과 평균, 등급 구하기 </B><br>";
echo "-------------------------------------- <br>";

$net = 88;
$sec = 79;
$win = 95;
$sum = $net + $sec + $win;
$avg = $sum/3;

echo " 네트워크 : {$net} 점<br>";
echo " 정보보안 : {$sec} 점<br>";
echo " 운영체제 : {$win} 점<br>";
echo "-------------------------------------- <br>";
echo " 과목총점 : {$sum} 점 <br>";
echo " 평균점수 : {$avg} 점 <br>";
echo "-------------------------------------- <br>";
echo " 점수등급 : ";

if($avg >= 95 && $avg <= 100)
	echo "A+";

elseif($avg >= 90 && $avg <= 94)		
	echo "A0";

elseif($avg >= 85 && $avg <= 89)		
	echo "B+";

elseif($avg >= 80 && $avg <= 84)		
	echo "B0";

elseif($avg >= 75 && $avg <= 79)		
	echo "C+";

elseif($avg >= 70 && $avg <= 74)		
	echo "C0";

elseif($avg >= 65 && $avg <= 69)		
	echo "D+";

elseif($avg >= 60 && $avg <= 64)		
	echo "D0";

else
	echo "F";

echo "<br>-------------------------------------- <br>";
?>