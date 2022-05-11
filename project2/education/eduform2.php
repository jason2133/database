<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<link rel="shortcut icon" href="../images/ku_logo.png">
<link rel="apple-touch-icon-precomposed" href="../images/ku_logo.png">
<script src="js/jquery.min.js"></script>
<script src="js/indigo.min.js"></script>
<link rel="stylesheet" href="../style.css">
<script>
   function check_input() {
      if (!document.member.name.value) {
          alert("이름을 입력하세요!");    
          document.member.name.focus();
          return;
      }
      if (!document.member.department.value) {
          alert("학과를 입력하세요!");    
          document.member.department.focus();
          return;
      }
      if (!document.member.studentnum.value) {
          alert("학번을 입력하세요!");    
          document.member.studentnum.focus();
          return;
      }
      if (!document.member.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member.email.focus();
          return;
      }
      if (!document.member.phone.value) {
          alert("휴대폰 번호를 입력하세요!");    
          document.member.phone.focus();
          return;
      }
      document.member.submit();
      alert('장비 교육 신청이 완료되었습니다!');
   }

   function reset_form() {
      document.member.name.value = "";  
      document.member.department.value = "";
      document.member.studentnum.value = "";
      document.member.email.value = "";
      document.member.phone.value = "";
      document.member.name.focus();
      return;
   }
</script>
</head>
<body> 
    <form name="member" action="insert2.php" method="post">
		<h2>장비교욱 신청</h2>
    	<ul class="join_form">
            <li>
                <span class="col1">이름</span>
                <span class="col2"><input type="text" name="name"></span>
            </li>
            <li>
                <span class="col1">학과</span>
                <span class="col2"><input type="text" name="department"></span>               
            </li>
            <li>
                <span class="col1">학번</span>
                <span class="col2"><input type="text" name="studentnum"></span>               
            </li>            
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email"></span>               
            </li>
            <li>
                <span class="col1">휴대폰번호</span>
                <span class="col2"><input type="text" name="phone"></span>               
            </li>                        
        </ul>                       
		<ul class="buttons">
	        <li><button type="button" onclick="check_input()">신청하기</button></li>
            <li><button type="button" onclick="reset_form()">취소하기</button></li>
            <li><button type="button"><a href='../education2.php'>뒤로가기</a></button></li>
        </ul>
    </form>
</body>
</html>