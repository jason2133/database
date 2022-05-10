<?php
  echo "<br><B> ※ 업로드 된 파일의 정보 확인 </B> <hr>";
  
  $uploadfile = $_FILES['upload'] ['name'];  // POST 방식으로 전송
  
  if(move_uploaded_file($_FILES['upload'] ['tmp_name'], $uploadfile)) 
  {
	echo "■ 파일 업로드 성공 !! <p>";
	echo "<img src={$_FILES['upload'] ['name'] }> <p><hr> ";
	echo " 1. 파일 이름 : {$_FILES['upload'] ['name'] }<br>";
	echo " 2. 파일 타입 : {$_FILES['upload'] ['type'] } <br>";
	echo " 3. 파일 크기 : {$_FILES['upload'] ['size'] } byte <br>";
	echo " 4. 임시 파일명 : {$_FILES['upload'] ['tmp_name'] }";
   }  
   else 
   {
	echo " 파일 업로드 실패 !! ";
	}
?>