<?php
   	function ticket1($day, $age) {      // 일반 입장권 요금
      	if ( $day == "주간" ) {
	            if ($age> 12 and $age < 65)
        	        $money = 26000;
                else
             	    $money = 19000;
       	}
      	else {
         	if ($age> 12 and $age < 65)
             	$money = 21000;
         	else
             	$money = 16000;
      	}
      
      	return $money;
   	}

   	function ticket2($day, $age) {      // 자유 이용권 요금	
      	if ( $day == "주간" ) {
         	if ($age> 12 and $age < 65)
                $money = 33000;
            else
             	$money = 24000;
      	    }
      	else {
         	if ($age> 12 and $age < 65)
             	$money = 28000;
         	else
             	$money = 21000;
      	}
      
      	return $money;
   	}

   	function ticket3($age) {      // 2일 이용권 요금  	
       	if ($age> 12 and $age < 65)
          	$money = 55000;
       	else
          	$money = 40000;

      	return $money;
   	}

   	function ticket4($age) {      // 콤비권 요금
   	    if ($age> 12 and $age < 65)
          	$money = 54000;
       	else
          	$money = 40000;

      	return $money;
   	}

   	/* $category 1 : 입장권, 2 : 자유 이용권, 
       3 : 2일 이용권, 4 : 콤비권
    */

   	$category = 2;          // $category : 구분
   	$age = 20;              // $age : 나이
   	$day = "야간";          // $day : "주간" 또는 "야간"

   	if( $category == 1 )
       	$pay = ticket1($day, $age);
   	elseif ( $category == 2 )
        $pay = ticket2($day, $age);
   	elseif ( $category == 3 )
       	$pay = ticket3($age);
   	else
       	$pay = ticket4($age);

   	if( $category == 1 )
       	$cat = "일반 입장권";
   	elseif ( $category == 2 )
       	$cat = "자유 이용권";
   	elseif ( $category == 3 )
       	$cat = "2일 이용권";
    else
       	$cat = "콤비권";

   	echo "구분 : ".$cat."<br>";
	if ($category == 1 or $category==2)
	    echo "주간/야간 : ".$day."<br>";
   	
	echo "나이 : ".$age."<br>";
   	echo "입장료 : ".$pay;
?>