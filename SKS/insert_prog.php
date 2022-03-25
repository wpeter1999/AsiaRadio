<?php
error_reporting( E_ALL ^ E_NOTICE );
include "sucess_login2.php";
$id =$_SESSION['m_id'];
//$id_1=$_GET['a'];
require "config.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="insert_prog2.php" onSubmit="if(!confirm('確定要新增嗎?')){return false;}">
<table width="1000" border="1">
  <tbody>
    <tr>
      <th colspan="4" bgcolor="#85B5FF" scope="row">新增系統</th>
    </tr>
    <tr>
      <th width="200" bgcolor="#00FFFB" scope="row">主題名稱:</th>
      <td width="576" bgcolor="#CFFFFE"><input name="textfield" type="text" id="textfield" maxlength="20" style="width: 400px;"></td>
      <th width="93" bgcolor="#00FFFB">公開:</th>
      <td width="103" bgcolor="#CFFFFE"><input type="checkbox" name="checkbox" id="checkbox"></td>
    </tr>
	    <tr>
      <th width="200" height="38" bgcolor="#00FFFB" scope="row"><input type="reset" name="reset" id="reset" value="重設" style="height: 30px; width: 60px;"><input type="hidden" name="id1" id="id1" value=<?php echo $id ?> style="height: 30px; width: 60px;"></th>
      <td width="576" bgcolor="#CFFFFE">&nbsp;</td>
      <td width="93" bgcolor="#00FFFB">&nbsp;</td>
      <td width="103" align="right" bgcolor="#CFFFFE"><input type="submit" name="submit" id="submit" value="送出" style="height: 30px; width: 60px;"></td>
    </tr>

  </tbody>
</table>

</form>
</body>
</html>