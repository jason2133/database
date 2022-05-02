<?php
// 회원 게시판 단독 실습을 위한 임시 설정
    $userid = "hong";
    $username = "홍길동";    

// 11장 로그인 기능과 연동해서 사용할 경우는 주석처리 해제
/*
    session_start();

    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
        
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";          
*/        
?>