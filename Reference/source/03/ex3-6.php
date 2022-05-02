<?php
   	$now_year = 2022;
   	$now_month = 4;
   	$now_day = 15;

   	$birth_year = 2000;
   	$birth_month = 7;
   	$birth_day = 10;

   	if($birth_month < $now_month)  
      	$age= $now_year - $birth_year;
   	else if($birth_month == $now_month)
   	{ 
      	if($birth_day <= $now_day)
         	$age= $now_year - $birth_year;
      	else
         	$age= $now_year - $birth_year-1;
   	} 
   	else
      	$age= $now_year - $birth_year-1;

   	echo "오늘 날짜 : ".$now_year."/".$now_month."/".$now_day."<br>";
   	echo "출생년월일 : ".$birth_year."/".$birth_month."/".$birth_day."<br>";
   	echo "만 나이 : ".$age."세";
?>