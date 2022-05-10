<?php

	echo "<br><h3> ♣  FORM에 입력된 개인정보를 POST방식으로 웹 브라우저에 출력 ♣ </h3>";
	echo "<hr> ";

	echo " o 아이디 .................. <B>{$_POST['id']} </B><br>" ;
	echo " o 성명 ................... <B>{$_POST['name']} </B><br><hr>";
	echo " o 비밀번호 ................. <B>{$_POST['pw1']} </B><br>";
	echo " o 비밀번호 확인 .............. <B>{$_POST['pw2']} </B><br><hr>";
	echo " o 성별 ................... <B>{$_POST['sex']} </B><br><hr>";
	echo " o 핸드폰 .................. <B>{$_POST['p1']} - {$_POST['p2']} - {$_POST['p3']} </B><br>";
	echo " o 주소 ................... <B>{$_POST['addr']} </B><br><hr>";
	echo " o 남기고 싶은 글 ............. <B>{$_POST['memo']} </B><br>";
	echo " o 숨긴내용 ................  <B>{$_POST['thema']} </B><br>";

	echo "<hr> ";
	echo "<B>회원등록에 기입한 내용을 모두 출력하였습니다...</B>"

?>