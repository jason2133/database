<?
include "dbconn_ex.php";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE> Select Test </TITLE>
</HEAD>

<BODY>

<H1>Insert Test</H1>

	<? 
	// 3_insert_query.php로 입력받은 값을 전달 (Action에 주소 정의)
	?>
	<FORM METHOD=GET ACTION="3_insert_query.php">

	<TABLE width="350" border>
	<TR>
		<TD width="150">Sailor ID</TD>
		<TD><INPUT TYPE="text" NAME="form_sid" size="12"></TD>
	</TR>
	<TR>
		<TD>Sailor Name</TD>
		<TD><INPUT TYPE="text" NAME="form_sname" size="12"></TD>
	</TR>
	<TR>
		<TD>Sailor Rating</TD>
		<TD><INPUT TYPE="text" NAME="form_rating" value="" size="2"></TD>
	</TR>
	
	<TR>
		<TD>Sailor Age</TD>
		<TD><INPUT TYPE="text" NAME="form_age" value="" size="2"></TD>
	</TR>
	
	<TR>
		<TD>Sailor Sex</TD>
		<TD><INPUT TYPE="text" NAME="form_sex" value="" size="1"></TD>
	</TR>

	</TABLE>

	<input type="submit">

	</form>




</BODY>
</HTML>