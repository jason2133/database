<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="style_edu.css">
<link rel="shortcut icon" href="images/ku_logo.png">
<link rel="apple-touch-icon-precomposed" href="images/ku_logo.png">
<script src="js/jquery.min.js"></script>
<script src="js/indigo.min.js"></script>
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
                    <h2 class="sec-tit">장비 예약 현황 확인</h2>
                    <p class="desc">3D 프린터, 레이저커터, 열전사 프레스 등 장비 예약 확인</br>고려대학교 KU메이커스페이스에서의 장비 예약 현황을 확인해보세요.</p>
                </div>
            </section>
            <ul class="buttons">
			    <li><button onclick="location.href='education/regist_check1.php'">[학생용] 장비예약 확인</button></li>
			    <li><button onclick="location.href='education/regist_check2.php'">[관리자용] 장비예약 현황 확인</button></li>
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