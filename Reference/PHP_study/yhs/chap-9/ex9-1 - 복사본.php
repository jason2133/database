<html>
	<head>
		<title> FROM 태그와 컨트롤 - 회원등록 </title>
	</head>

	<body>
		<h2><center> 회원 등록 화면  </h2>

	<form  method="post" action= "ex9-2.php">
		<table border=2 bordercolor="blue" width=700 cellspacing=1 cellpadding=5>

			<tr>
				<td width=150 align=center> 아이디 </td>
				<td width=300>
					<input type="text" size=15 maxlength=10 name="id">
				</td>

				<td width=150 align=center> 성명 </td>
				<td width=300>
					<input type="text" size=15 maxlength=12 name="name">
				</td>
			</tr>

			<tr>
				<td align=center> 비밀번호 </td>
				<td>
					<input type="password" size=10 maxlength=6 name="pw1">
				</td>

				<td align=center> 비밀번호 확인 </td>
				<td>
					<input type="password" size=10 maxlength=6 name="pw2">
				</td>
			</tr>

			<tr>
				<td align=center> 핸드폰 </td>
				<td>
					<select name="p1">
						<option value=" "> 선택 </option>
						<option value="010 "> 010 </option>
						<option value="011 "> 011 </option>
						<option value="016 "> 016 </option>
						<option value="017 "> 017 </option>
						<option value="019 "> 019 </option>
					</select> - 
					<input type="text" size=4 name="p2" maxlength=4> -
					<input type="text" size=4 name="p3" maxlength=4> 
				</td>

				<td align=center> 성별 </td>
				<td>
					<input type="radio" name="sex" value="남자" checked> 남
					<input type="radio" name="sex" value="여자"> 여
				</td>
			</tr>

			<tr>
				<td align=center>  주소 </td>
				<td colspan=3>
					<input type="text" size=60 name="addr">
				</td>
			</tr>

			<tr>
				<td align=center> 관심분야 </td>
				<td colspan=3>
					<input type="checkbox" name="com" value="yes" checked>
						컴퓨터 
					<input type="checkbox" name="spo" value="yes">
						스포츠 
					<input type="checkbox" name="shop" value="yes">
						쇼핑 
					<input type="checkbox" name="mov" value="yes">
						영화감상 
				</td>
			</tr>

			<tr>
				<td align=center>  남기고 <br> 싶은 글 </td>
				<td colspan=3>
					<textarea name="memo" rows=8 cols=60> </textarea>
				</td>
			</tr>
	
		</table><br>

		<table border=0 width=800>
			<tr>
				<td align=center>
					<input type="submit" value="회원 등록">
					<input type ="reset" value="다시 작성">
				</td>
			</tr>
		</table>

		<input type="hidden" name="thema" value="회원 등록 서식">

	</form></center>
	</body>
</html>