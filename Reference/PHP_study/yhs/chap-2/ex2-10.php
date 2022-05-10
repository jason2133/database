<?php
echo " <b> ■ Apache 서버와 관련된 환경 변수 </b><hr>";
echo " 1. 서버이름 .................. [ <b> " . $_SERVER ['SERVER_NAME'] . " </b> ] <br>";
echo " 2. 서버의 프로토콜 ............. [ <b> " . $_SERVER ['SERVER_PROTOCOL'] . " </b> ] <br>";
echo " 3. 서버의 포트번호 ............. [ <b> " . $_SERVER ['SERVER_PORT'] . " </b> ] <br>";
echo " 4. 클라이언트의 IP 주소 ........ [ <b> " . $_SERVER ['SERVER_ADDR'] . " </b> ] <br>";
echo " 5. 실행중인 파일의 경로 ......... [ <b> " . $_SERVER ['SCRIPT_FILENAME'] . " </b> ] <br>";
echo " 6. 실행중인 파일의 이름 ......... [ <b> " . $_SERVER ['SCRIPT_NAME'] . " </b> ] <br>";
echo " 7. 현재 실행중인 프로그램의 이름 .. [ <b> " . $_SERVER ['PHP_SELF'] . " </b> ] <br>";
?>