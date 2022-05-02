<ul class="board_list">
	     <li>
		<span class="col1">번호</span>
		<span class="col2">제목</span>
		<span class="col3">글쓴이</span>
		<span class="col4">첨부</span>
		<span class="col5">등록일</span>
	     </li>
<?php
	include "session.php"; 	// 세션 처리

	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "user", "12345", "sample");	
	$sql = "select * from memberboard order by num desc";		
	$result = mysqli_query($con, $sql);			
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 4;	// 한 화면에 표시되는 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = (intval($page) - 1) * $scale;      

	$number = $total_record - $start;
	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
      	mysqli_data_seek($result, $i); 	// 레코드 포인터 이동      	
      	$row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

	$num         = $row["num"];			// 일련번호
	$id        	 = $row["id"];			// 아이디
	$name        = $row["name"];		// 이름
	$subject     = $row["subject"];		// 제목
    $regist_day  = $row["regist_day"]; 	// 작성일
        if ($row["file_name"])
          $file_image = "<img src='./file.png'>";
      	else
          $file_image = " ";		  
?>
<li>
    <span class="col1"><?=$number?></span>		
    <span class="col2"><a href="view.php?num=<?=$num?>&
                             page=<?=$page?>"><?=$subject?></a></span>
    <span class="col3"><?=$name?></span>
    <span class="col4"><?=$file_image?></span>
    <span class="col5"><?=$regist_day?></span>
</li>	
<?php
      $number--;
   }
   mysqli_close($con);
?>
    </ul>          
          