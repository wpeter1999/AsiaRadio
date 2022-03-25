<?php
error_reporting( E_ALL ^ E_NOTICE );
include "sucess_login2.php";
$rpid = $_GET['a'];
require "config.php";
$sql = "SELECT * FROM rad_prog WHERE rp_sn='$rpid'"; //搜索資料指令
$result = mysqli_query( $link, $sql ); //執行指令,並把結果存到result
$number_result = mysqli_num_rows( $result ); //符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for ( $ii = 0; $ii < $number_result; $ii++ ) {
  $arr[ $ii ] = mysqli_fetch_array( $result );
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="edit_prog2.php" onSubmit="if(!confirm('確定要修改嗎?')){return false;}">
<table width="1000" border="1">
  <tbody>
    <tr>
      <th colspan="4" bgcolor="#85B5FF" scope="row">新增系統</th>
    </tr>
    <tr>
      <th width="200" bgcolor="#00FFFB" scope="row">主題名稱:</th>
      <td width="576" bgcolor="#CFFFFE"><input name="textfield" type="text" id="textfield" maxlength="20" style="width: 400px;" value="<?php echo $arr[0]['rp_name']?>"></td>
      <th width="93" bgcolor="#00FFFB">公開:</th>

	  <?php 
	  if($arr[0]['rp_public']==1){
	  ?>
	  <td width="103" bgcolor="#CFFFFE"><input type="checkbox" name="problic" id="problic" checked="checked"></td>
	  <?php 
	  }else{
	  ?>
	  <td width="103" bgcolor="#CFFFFE"><input type="checkbox" name="problic" id="problic"></td>
	  <?php
	  }
	  ?>
    </tr>
	    <tr>
      <th width="200" height="38" bgcolor="#00FFFB" scope="row"><input type="reset" name="reset" id="reset" value="重設" style="height: 30px; width: 60px;"><input type="hidden" name="rpid" id="rpid" value=<?php echo $rpid ?> style="height: 30px; width: 60px;"></th>
      <td width="576" bgcolor="#CFFFFE">&nbsp;</td>
      <td width="93" bgcolor="#00FFFB">&nbsp;</td>
      <td width="103" align="right" bgcolor="#CFFFFE"><input type="submit" name="submit" id="submit" value="送出" style="height: 30px; width: 60px;"></td>
    </tr>

  </tbody>
</table>

</form>
</body>
</html>