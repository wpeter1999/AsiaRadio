<?php
include "sucess_login2.php";

$id = $_SESSION['m_id'];
$user=$_SESSION['m_name'];
require "config.php";
$sql = "SELECT * FROM rad_form WHERE rad_main_title='$id'"; //搜索資料指令
$result = mysqli_query( $link, $sql ); //執行指令,並把結果存到result
$number_result = mysqli_num_rows( $result ); //符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for ( $i = 0; $i < $number_result; $i++ ) {
  $arr[ $i ] = mysqli_fetch_array( $result );
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>節目主題</title>
<style type="text/css">
.style1 {
	text-align: right;
	background-color: #239CB6;
}
.style2 {
	color: #FFFFFF;
	background-color: #00C8C8;
}
.style3 {
	background-color: #DBFFFF;
}
</style>
</head>

<body>

<form action="" method="post" enctype="multipart/form-data">
	<table style="width: 50%">
		<tr>
			<td style="width: 100px" class="style2">節目主題:</td>
			<td style="width: 160px" class="style3">
			<select name="Select1" style="width: 160px">
			<option></option>
			<option value="java">Java語言</option>
        	<option value="c">C語言</option>
        	<option value="ruby">Ruby語言</option>
		  </select></td>
			<td style="width: 100px" rowspan="5" valign="top" class="style2">簡介:</td>
			<td style="width: 160px" rowspan="5" valign="top" class="style3">
			<textarea name="TextArea1" style="width: 200px; height: 110px"></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 100px" class="style2">單元名稱:</td>
			<td style="width: 160px" class="style3"><input name="Text1" type="text" style="width: 160px" /></td>
		</tr>
		<tr>
			<td style="width: 100px" class="style2">主持人:</td>
			<td style="width: 160px" class="style3"><?php echo $user ?></td>
		</tr>
		<tr>
			<td style="width: 100px" class="style2">檔案:</td>
			<td style="width: 160px" class="style3"><label for="fileField"></label>
		    <input type="file" name="fileField" id="fileField" /></td>
		</tr>
		<tr>
			<td style="width: 100px" class="style2">撥放日期:</td>
			<td style="width: 160px" class="style3"><input type="date" name="date"/></input></td>
		</tr>
		<tr>
			<td style="width: 100px" class="style2"><span class="style2" style="width: 100px">播放時間:</span></td>
			<td style="width: 160px" class="style3"><datalist id="exampleList">
				<option value="A">
				<option value="B">
				</datalist>
		    <input type="time" name="time" id="time" /></td>
			<td style="width: 100px" class="style2">來賓:</td>
			<td style="width: 160px" class="style3">
			<input name="Text3" type="text" style="width: 180px" /></td>
		</tr>

		<tr>
			<td align="left" class="style2" style="width: 100px"><span class="style2" style="width: 100px">種類:</span></td>
			<td align="left" class="style3" style="width: 100px"><span class="style3" style="width: 160px">
			  <input type="text" name="example" list="exampleList" />
			</span></td>
		  <td align="right" class="style1" style="width: 100px" colspan="2"><span class="style1" style="width: 100px">
		    <input name="Submit1" type="submit" value="送出" style="width: 60px" />
		  </span></td>
		</tr>
	</table>
</form>

</body>

</html>
