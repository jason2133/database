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
                    <h2 class="sec-tit">월E</h2>
                    <p class="desc">나만의 영화 캐릭터 만들기</br>고려대학교 KU메이커스페이스에서 만든 작품을 구경해보세요.</p>
                </div>
            </section>
            <article class="product1">
                <img src="images/fig4_walle.png" alt="">
                <p></br></p>
                <p>영화 '월E'에 등장하는 귀여운 주인공 월E 입니다.</br>'월E'라고 소리지르곤 하죠.</p>
                <p>월E를 어떻게 만들지 가볍게 2D 상으로 디자인한 후,</br>대략적인 모습을 확인하기 위해 3D 상으로도 확인해보았습니다.</p>
                <p>이후 목재 등 여러 재료들을 이용하여 전체적인 틀을 만들었고,</br>이를 수정해가며 월E를 만들었습니다.</p>
                <p>이제 딥러닝 NeRF 기술을 활용하여 작품의 3D 모델을 확인해볼 차례입니다.</br>하단의 2개 영상을 비교해보세요.</br</br</p>
            </article>
            <article class="product2">
                <p>★ 작품을 360도로 촬영한 동영상</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TSIsLB64dNc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
            <article class="product2">
                <p>★ 딥러닝 NeRF를 활용한 작품의 3D 모델 구현</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cLfPJ66jJLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
            <div class ='product4'>
                <p></p>
            </div>
            <div class="product3">
                    <button><a href="product.php">작품 목록보기</a></button>
            </div>
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