<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php

if(isset($_GET['no'])){
	if($_GET['no']==1){
	echo "帳號或密碼錯誤";
	}
}else{
	echo "請輸入帳號和密碼";
}
?>
<form id="form1" name="form1" method="post" action="checkpass.php">
<table width="334" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="74" bgcolor="#999999">帳號：</td>
    <td width="239"><label for="textfield"></label>
      <input type="text" name="id_input" id="textfield" /></td>
  </tr>
  <tr>
    <td bgcolor="#999999">密碼：</td>
    <td><label for="textfield2"></label>
      <label for="textfield2"></label>
      <input type="password" name="pass_input" id="textfield2" /></td>
  </tr>
  <tr>
    <td><input type="reset" name="button" id="button" value="重設" /></td>
    <td align="right"><input type="submit" name="button2" id="button2" value="送出" /></td>
  </tr>
</table>
</form>

</body>
</html>
