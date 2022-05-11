<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
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
                    <h2 class="sec-tit">작품 소개</h2>
                    <p class="desc">딥러닝 NeRF 기술을 활용하여 3D로 실감나게 구현된 작품들!<br>고려대학교 KU메이커스페이스에서 만들어진 작품들을 자유롭게 구경해보세요.</p>
                </div>
            </section>
            <section class="work-section cfixed">
                <ul class="work-list">
                    <li>
                        <a href="product1.php">
                            <div class="info">
                                <!-- Number 1 -->
                                <h3>I am GROOT!</h3>
                                <span>3D 프린터를 활용한 제작</span>
                            </div>
                            <img src="images/fig1_groot.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product2.php">
                            <div class="info">
                                <!-- Number 2 -->
                                <h3>월E</h3>
                                <span>나만의 영화 캐릭터 만들기</span>
                            </div>
                            <img src="images/fig4_walle.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product3.php">
                            <div class="info">
                                <!-- Number 3 -->
                                <h3>부엉이</h3>
                                <span>목재 작품 만들기</span>
                            </div>
                            <img src="images/fig3_owl.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product4.php">
                            <div class="info">
                                <!-- Number 4 -->
                                <h3>회색 토끼</h3>
                                <span>나만의 토끼 만들기</span>
                            </div>
                            <img src="images/fig9_gr_2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product5.php">
                            <div class="info">
                                <!-- Number 5 -->
                                <h3>어몽어스</h3>
                                <span>3D 프린터를 활용한 제작</span>
                            </div>
                            <img src="images/fig5_amongus.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product6.php">
                            <div class="info">
                                <!-- Number 6 -->
                                <h3>파란색 성</h3>
                                <span>나만의 성 만들기</span>
                            </div>
                            <img src="images/fig6_blue_shinjun.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product7.php">
                            <div class="info">
                                <!-- Number 7 -->
                                <h3>노란색 피카츄</h3>
                                <span>피카 피카 피카츄</span>
                            </div>
                            <img src="images/fig7_pikachu.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="product8.php">
                            <div class="info">
                                <!-- Number 8 -->
                                <h3>보라색 몬스터</h3>
                                <span>귀여운 나만의 몬스터 만들기</span>
                            </div>
                            <img src="images/fig8_purple.png" alt="">
                        </a>
                    </li>
                </ul>
            </section>
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