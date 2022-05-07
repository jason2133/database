<?php
    session_start();
    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else 
        $userid = "";
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
?>	
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="shortcut icon" href="images/ku_logo.png">
<!-- <link rel="apple-touch-icon-precomposed" href="images/favicon/indigo-touch-icon.png"> -->
<link rel="apple-touch-icon-precomposed" href="images/ku_logo.png">
<script src="js/jquery.min.js"></script>
<script src="js/indigo.min.js"></script>
</head>
<body>
<div id="wrap">
        <header class="header cfixed">
            <h1 class="logo"><a href="../index.php">KU Makerspace</a></h1>
            <nav>
                <ul class="gnb">
                    <li><a href="../introduction.php">기관 소개</a></li>
                    <li><a href="../education.php">장비교육</a></li>
                    <li><a href="../reservation.php">장비예약</a></li>
                    <li><a href="../notice.php">공지사항</a></li>
                    <li><a href="../freeboard.php">자유 게시판</a></li>
                    <li><a href="../product.php">대회 작품들</a></li>
                    <li><a href="login_page.php">회원가입/로그인</a></li>
                </ul>
            </nav>
            <span class="menu-toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </header>
        <!-- <article class="slider">
            <img src="images/kumakerspace_space.jpg" alt="">
        </article> -->
        <section class="content">
            <section class="display-section">
                <div class="container">
                    <h2 class="sec-tit">회원가입 / 로그인</h2>
                    <p class="desc">회원가입 및 로그인을 진행하는 곳.</br>내가 원하는 물건을 직접 설계하고 제작해볼 수 있는 공간</p>
                </div>
            </section>
            <h2></h2>

    <div class="header">
        <div class="top">
<?php
    if(!$userid) {
?>              

<script>
	function check_input()
	{
    	if (!document.login.id.value) {
        	alert("아이디를 입력하세요");    
        	document.login_form.id.focus();
        	return;
    	}

    	if (!document.login.pass.value) {
        	alert("비밀번호를 입력하세요");    
        	document.login.pass.focus();
        	return;
    	}
    	document.login.submit();
	}
</script>	
<h2 class="login_title">로그인 / 회원가입</h2>
</br></br>
    <form name="login" method="post" action="login.php">		       	
        <ul class="login_form">
            <li>
				<span class="col1">아이디</span>
				<span class="col2"><input type="text" name="id" placeholder="아이디"></span>
			</li>	
            </br></br>
			<li>			
				<span class="col1">비밀번호</span>
				<span class="col2"><input type="password" name="pass" placeholder="비밀번호"></span>
			</li>
            </br></br>
			<li><button type="button" onclick="check_input()">로그인</button></li>
            </br>
			<li><button type="button"><a href="form.php">회원가입</a></button></li>
        </ul>   	
	</form>

<?php
    } else {
                $logged = $username."(".$userid.")";
?>

                <section class="display-section">
                <div class="container">
                    <h2 class="sec-tit"><?=$logged?> | <a href="logout.php">로그아웃</a> | <a href="modify_form.php">정보수정</a></h2>
                </div>
            </section>
<?php
    }
?>
        </div> <!-- top -->
    </div> <!-- header -->
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
</body>
</html>