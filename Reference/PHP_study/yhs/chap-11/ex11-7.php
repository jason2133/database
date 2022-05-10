<?PHP

	session_start ( );           //세션의 시작(반드시 가장 먼저 선언)
	
	$_SESSION['car'] = 'BMW';
	$_SESSION['color'] = 'silver';
	
	echo "<br><b>■ 세션 생성 프로그램 </b><hr>";
	echo " 1. 세션 초기화 ..... <b> session_start( )함수</b> 사용 <br>";
	echo " 2. 세션 등록 ........ <b> \$SESSION['변수명'] </b> 정의 <hr>";
	
	echo " <br> ->>>>>  세션 등록 성공 <<<<<-     <p><hr>";
	
	echo " > 이 프로그램에서는 세션만 생성됩니다. <br> ";
	echo " > 세션을 사용하려면 [예제 11-8] 프로그램이 존재해야 합니다.<br> ";
	
?>