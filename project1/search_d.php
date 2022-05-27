<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
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
    text-align: center;
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
</style>

<form  action="search_d2.php" name="form" method="post" style="margin-top:10px;">
        <fieldset>
            <legend>디자이너용 조회</legend>
            <center>
            <table width="430" height="480">
                <tr> 
                    <td><b>디자이너 이름 </b></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><b>전화번호 </b></td>
                    <td><input type="text" name="telephone_number"></td>
                </tr>

                <!-- submit button -->
                <tr><td colspan="2"><center><img src="img/confirm.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
            </table>
            </center>
        </fieldset>
    </form>