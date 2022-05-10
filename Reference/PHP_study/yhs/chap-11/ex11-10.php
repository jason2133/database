<?php

	session_start ( );            
	$id = session_id( );
	
	echo "<br><b> ■ 등록된 세션 중 일부 세션 삭제하기 </b><hr>";
	
	unset ($_SESSION['color']);
	
	echo "   <<<-x-x-x-  <b>'color' </b>세션 삭제 중  x-x-x->>> <p><hr>";
	echo " ▶  'color' 세션이 삭제되었습니다.  <hr>";
	
	echo " ..... 1. 차  종 :  [ <b>";
	echo $_SESSION['car'];  
	echo " </b> ] <p>  ";
	
	echo " ..... 2. 색  상 :  [ <b>";
	echo $_SESSION['color'];
	echo " </b> ] <hr>  ";
	
	echo " ▶ 세션 ID ..... [  <b> {$id} </b> ] ";
	
?>