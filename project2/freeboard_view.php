<?php
    if (isset($_GET["num"]))				// $_GET["num"] : 레코드 번호
		$num = $_GET["num"];
	else 
		$num = "";

	$con = mysqli_connect("localhost", "user", "12345", "sample");	// DB 접속
	$sql = "select * from freeboard where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
	$name      = $row["name"];					// 이름
	$subject    = $row["subject"];				// 제목
	$regist_day   = $row["regist_day"];			// 작성일
	$content    = $row["content"];				// 내용
	$content = str_replace(" ", "&nbsp;", $content);		// 공백 변환
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 변환
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet"  href="style_board.css">
<link rel="shortcut icon" href="images/ku_logo.png">
<link rel="apple-touch-icon-precomposed" href="images/ku_logo.png">
<script src="js/jquery.min.js"></script>
<script src="js/indigo.min.js"></script>
<script>
	function check_password(mode, num) {
     	window.open("password_form.php?mode="+mode+"&num="+num,
         "pass_check",
          "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
   }
</script>
</head>
<body>
    <div id="wrap">
        <header class="header cfixed">
            <h1 class="logo"><a href="index.php">KU Makerspace</a></h1>
            <nav>
                <ul class="gnb">
                    <li><a href="introduction.php">기관 소개</a></li>
                    <li><a href="education.php">장비교육</a></li>
                    <li><a href="reservation.php">장비예약</a></li>
                    <li><a href="freeboard.php">자유 게시판</a></li>
                    <li><a href="product.php">대회 작품들</a></li>
                    <li><a href="login/login_page.php">회원가입/로그인</a></li>
                </ul>
            </nav>
            <span class="menu-toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </header>

        <section class="content">
            <section class="display-section">
                <div class="container">
                    <h2 class="sec-tit">자유 게시물 > 내용 보기</h2>
                    <p class="desc">자유 게시물의 내용을 확인해보세요.</br>내가 원하는 물건을 직접 설계하고 제작해볼 수 있는 공간</p>
                </div>
            </section>
            <h2></h2>
            <ul class="board_view">
                <li class="row1">
                    <span class="col1"><b>제목 :</b> <?=$subject?></span>	
                    <span class="col2"><?=$name?> | <?=$regist_day?></span>	
                </li>
                <li class="row2">
                    <?=$content?>	
                </li>		
            </ul>
            <ul class="buttons">
                <li><button onclick="location.href='freeboard.php'">목록보기</button></li>
                <li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>   
                <li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
                <li><button onclick="location.href='freeboard_form.php'">글쓰기</button></li>
            </ul>
            <section class="contact-section">
                <div class="container">
                    <h2 class="sec-tit">CONTACT</h2>
                    <div class="form-box">
                        <form action="" method="">
                            <fieldset class="cfixed">
                                <legend class="blind">CONTACT US</legend>
                                <div class="form">
                                    <label for="name" class="blind">name</label>
                                    <input type="text" id="name" placeholder="Name">
                                    <label for="phone" class="blind">phone</label>
                                    <input type="tel" id="phone" placeholder="Phone">
                                    <label for="email" class="blind">email</label>
                                    <input type="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="textarea">
                                    <label for="message" class="blind">message</label>
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </fieldset>
                            <div class="send-btn">
                                <button>SEND MASSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
        <footer class="footer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.4519002085414!2d127.02549282924325!3d37.5831479987372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbcb104e884ed%3A0x82d45b93eeb4ed6d!2z6rOg66Ck64yA7ZWZ6rWQIOywveydmOq0gA!5e0!3m2!1sko!2skr!4v1651492301040!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="copyright">Korea University</p>
        </footer>
    </div>
</body>
</html>