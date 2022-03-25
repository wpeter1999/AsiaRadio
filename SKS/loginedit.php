<?php
include "sucess_login2.php";
if(isset($_GET['no'])){
	echo $_GET['no'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳號</title>
<style type="text/css">
.style3 {
	font-family: 微軟正黑體;
	background-color: #DBFFFF;
}
.style4 {
	font-family: 微軟正黑體;
	background-color: #FFFFFF;
	text-align: right;
}
.style7 {
	font-family: 微軟正黑體;
	background-color: #00C8C8;
	color: #FFFFFF;
}
.style8 {
	font-family: 微軟正黑體;
	background-color: #FFFFFF;
	color: #FFFFFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="loginedit2.php">
<table style="width: 500px; height: 140px;">
	<tr>
		<td class="style7" style="width: 150px">帳號:</td>
		<td class="style3">
		<input name="id_input" type="text" style="height: 25px; width: 280px" />
		</td>
	</tr>
	<tr>
		<td class="style7" style="width: 150px">舊密碼:</td>
		<td class="style3">
			<input name="pass_input" type="password" style="width: 280px; height: 25px" />
		</td>
	</tr>
	<tr>
		<td class="style7" style="width: 150px">新密碼:</td>
		<td class="style3">
			<input name="newpass1" type="password" style="width: 280px; height: 25px" />
		</td>

	</tr>
	<tr>
		<td class="style7" style="width: 150px">再次輸入新密碼:</td>
		<td class="style3">
			<input name="newpass2" type="password" style="width: 280px; height: 25px" />
		</td>

	</tr>
	<tr>
		<td class="style8" style="width: 150px; height: 30px;">
		<input type="reset" name="reset" id="reset" value="重設" />
	    <td class="style4" style="height: 30px">
		<input type="submit" name="submit" id="submit" value="送出" />
  </table>

</form>

</body>

</html>
