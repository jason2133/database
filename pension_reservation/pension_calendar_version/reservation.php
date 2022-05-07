<?
	session_start();
	if(!$_SESSION['sess_userid'])  //로그인하지 않았다면 로그인 페이지로 이동
	{
		?>
			<script>
				location.replace("index.php");
			</script>
		<?
		exit;
	}
	include "conndb.php";
	$db_link=db_conn();  //데이터베이스와 연결하는 사용자 정의 함수
	mysqli_select_db($db_link,$DB_SNAME); //내부 database 선택

	$SQL = " SELECT A.house_id, max(A.house_name) as house_name, max(A.house_address) as house_address, max(A.contents) as contents, count(B.rs_id) as rsCount
					FROM tb_house A left outer join tb_house_reservation B
				on A.house_id = B.house_id
				group by A.house_id
				ORDER BY A.house_name asc ";
	$resultHouse = mysqli_query($db_link, $SQL);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>펜션예약</title>
  <link href='fullcalendar.min.css' rel='stylesheet' />
  <link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src="jquery.min.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script src='moment.min.js'></script>
  <script src='fullcalendar.min.js'></script>
  <script src='fullcalendar_ko.js'></script>
<body>
	<div style="width:1000px; margin:0px auto; background-color:white; margin-top:30px">
		<table style="width:100%">
			<tr style="height:33px; background-color:gray; color:white; text-align:center">
				<td>
					No.
				</td>
				<td>
					펜션 이름
				</td>
				<td>
					주소
				</td>
				<td>
					설명
				</td>
			</tr>
			<?
				$idx = 1;
				while($row = mysqli_fetch_array($resultHouse))
				{
					?>
						<tr style="height:33px; text-align:center" class="classPensionGroup" selectpension="" onclick="javascript:clickPension(this, '<?=$idx?>', '<?=$row[house_id]?>', '<?=$row[house_name]?>');" onmouseover="javascript:selectPension(this);" onmouseout="javascript:unSelectPension(this);">
							<td>
								<?=$idx?>
							</td>
							<td>
								<?=$row[house_name]?>
							</td>
							<td>
								<?=$row[house_address]?>
							</td>
							<td>
								<?=$row[contents]?>
							</td>
						</tr>
						<tr style="height:0px; text-align:center">
							<td colspan=4 style="border-bottom:1px solid #dddddd"></td>
						</tr>
						<tr id="trCalendar<?=$idx?>" style="display:none">
							<td colspan=4>
								<div style="padding-left:45px; margin-top:5px; margin-bottom:5px">예약하실 날짜를 선택해주세요</div>
								<div id='calendar<?=$idx?>' style="max-width:900px; margin: 0 auto;">
								</div>
							</td>							
						</tr>
					<?
					$idx++;
				}
			?>
		</table>
	</div>

	<div class="box box-success" style="width:500px; display:none; background-color:white; padding-top:15px; padding-bottom:15px" id="winReservation">
		<form name=frm method="post" action="reservation_ok.php">		
		<input type="hidden" name="insert_houseid" id="insert_houseid" value="">
		<div style="width:100%; height:33px; margin-left:20px">
			<div style="width:30%;float:left">
				펜션이름:
			</div>
			<div style="width:70%;float:left" id="divHouseName">
			</div>
		</div>
		<div style="width:100%; height:33px; margin-left:20px">
			<div style="width:30%;float:left">
				예약날짜:
			</div>
			<div style="width:70%;float:left">
				<input type="text" name="reservation_date" id="reservation_date" style="width:80px">
			</div>
		</div>
		<div style="width:100%; height:33px; margin-left:20px">
			<div style="width:30%;float:left">
				숙박인원:
			</div>
			<div style="width:70%;float:left">
				<input type="text" name="total_man" id="total_man" style="width:50px">명
			</div>
		</div>
		</form>
		<div style="width:100%; height:33px; margin-top:30px; text-align:center">
			<button style="background-color:gray; color:white; border:1px solid #222222" onclick="javascript:saveReservation();">예약하기</button>
		</div>
	</div><!-- /.box -->
</body>
<script src="jquery.bpopup2.min.js" type="text/javascript"></script>
<script>
	function execReservation(houseID, houseName, selectedDate)
	{
		$("#insert_houseid").val(houseID);
		$("#divHouseName").html(houseName);
		$("#reservation_date").val(selectedDate);

		$('#winReservation').bPopup();
	}

	var selectedPension = "";
	var selectedPensionDetail = "";
	function clickPension(objThis, idx, houseID, houseName)
	{
		if(selectedPension)
		{
			$(selectedPension).attr("selectpension","");
			unSelectPension(selectedPension);
			if(selectedPensionDetail)
			{
				selectedPensionDetail.hide();
			}
		}

		selectedPension = objThis;
		selectedPensionDetail = $("#trCalendar"+idx);
		$(objThis).attr("selectpension","ok");

		showPensionDetail(objThis, idx, houseID, houseName);
	}

	function selectPension(objThis)
	{
		$(objThis).css('background-color','#aaaaaa'); 
		$(objThis).css('color','white')
	}

	function unSelectPension(objThis)
	{
		if($(objThis).attr("selectpension") != "ok")
		{
			$(objThis).css('background-color','white'); 
			$(objThis).css('color','black')
		}
	}

	function showPensionDetail(objThis, idx, houseID, houseName)
	{
		selectedPensionDetail.show();

		$('#calendar'+idx).fullCalendar({
		  editable: true,
		  navLinks: true,
		  eventLimit: true,
		  locale : "ko",
		  events: {
			url: 'getPensionReservation.php?houseid='+houseID,
			error: function() {
			  $('#script-warning').show();
			}
		  },
			dayClick: function(date, jsEvent, view) {
				var selectedDate = date.format();  //yyyy-mm-dd
				execReservation(houseID, houseName, selectedDate);
			}
		});
	}

	function saveReservation()
	{
		if(!$.trim($("#reservation_date").val()))
		{
			alert("예약날짜를 입력해주십시오");
			return false;
		}
		if(!$.trim($("#total_man").val()))
		{
			alert("숙박인원을 입력해주십시오");
			return false;
		}
		if(isNaN($("#total_man").val()))
		{
			alert("숙박인원을 숫자로 입력해주십시오");
			return false;
		}
		document.frm.submit();
	}
</script>
</html>