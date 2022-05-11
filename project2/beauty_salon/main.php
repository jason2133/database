<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>미용실 예약 사이트</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<?
	include "dbconn.php";
?>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
	font-size: 15px;
	font-family: 'Nanum Gothic';
}

img{
	border-style: solid;
	border-width: 1px;
	border-color: #a0a0a0;
}

select{
	text-align: center;
}

a:link {
    color: #000000;
    text-decoration: none;
}
a:visited {
    color: #000000;
    text-decoration: none;
}
a:hover {
    color: #000000;
    text-decoration: none;
}

#form_table{
	padding-left: 10px;
	border-style: solid;
	border-width: 1px;
	border-color: #000000;
}

#station_pop{
	width:100px; 
	height:auto; 
	background-color: #ffffff;
	position:absolute; 
	top:60px; 
	left:340px; 
	border-style: solid;
	border-width: 1px;
	border-color: black;
}

#day_pop{
	width:auto; 
	height:auto; 
	background-color: #ffffff;
	position:absolute; 
	top:185px; 
	left:340px; 
	border-style: solid;
	border-width: 1px;
	border-color: black;
}

.show_train{
	font-size: 13px;
	border-style: solid;
	border-width: 2px;
	border-color: #000000;
}

.show_train th{
	padding: 3px;
	background-color:  #f2f2f2;
	border-bottom: solid 1px #aaa;
	border-right: solid 1px #aaa;
}

.show_train td{
	padding: 10px;
	border-bottom: solid 1px #aaa;
	border-right: solid 1px #aaa;
}

.ktx{
	text-decoration: underline;
	background-color: #FFD4DF;
	color: #FF5675;
}

.mugunghwa{
	text-decoration: underline;
	background-color: #FAFAAA;
	color: #FFA500;
}

.saemaeul{
	text-decoration: underline;
	background-color: #D2FFD2;
	color: #46B4B4;
}

body{
	margin: 0 auto;
	 width: 50%;
	 text-align:center;
}

button {
	font-size:25px; padding:20px 20px;
}

</style>
<script type="text/javascript">


//client register button event
function register(){
	window.open('register.php', '등록하기', "width=350,height=350,toolbar=no,location=yes,status=no,menubar=no, scrollbars=no,resizable=no,left=150,top=150");
}

//client reservation search button event
function ask(){
	window.open('search.php', '조회', "width=500,height=540,toolbar=no,location=yes,status=no,menubar=no, scrollbars=yes,resizable=no,left=150,top=150");
}

</script>
</head>
<body>
 <div id="beauty_salon">
 	<img src="img/beauty_salon.png" style="border-style: none; width: 300px;height: 300px;">
	 <h3> 데베 미용실 </h3>
	 <p> 데베 미용실에 예약 하러 오신 것을 환영합니다.</p>
	 <p> 미용실 예약에 앞서 고객이 아닌 분들은 등록을 해주시기 바랍니다.</p>
		<!-- client register button and client reservation search button event and weekly report button-->
		<div style="padding-bottom: 5px;" >
			<button style="border-width:0px; margin-right: 5px;" onClick="register()">회원 등록
			</button>
			<button style="border-width:0px; margin-right: 5px;" onClick="window.alert('현재 준비 중입니다.')">미용실 예약
			</button>
			<button style="border-width:0px;" onClick="ask()">
			예약 조회
			</button>
		</div>
		<div>
			

		</div>
</div>
	
	
</body>
</html>