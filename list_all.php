<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
.style1 {
	text-align: center;
	color: #FFFFFF;
	background-color: #9C6600;
	font-family: Microsoft JhengHei;
}
.style3 {
	background-color: #FFE495;
	color: #000392;
	font-family: Microsoft JhengHei;
}
.style4 {
	background-color: #FFE495;
	color: #000392;
	font-family: Microsoft JhengHei;
}
.style5 {
	color: #FFFFFF;
	background-color: #FFB600;
	font-family: Microsoft JhengHei;
}
</style>

</head>
<?php
$front_data=$_GET['a'];//把前面程式的a變數的值存到$front_data
//echo $front_data;//把$front_data的值收到browser
require "config.php";
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_form WHERE rad_sn='$front_data'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

 

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}

/*
echo "序號:".$arr[0]['rad_sn']."<br>";
echo "節目名稱:".$arr[0]['rad_main_title']."<br>";
echo "主題:".$arr[0]['rad_title']."<br>";
echo "節目內容: ".$arr[0]['rad_sammary']."<br>";
echo "檔名:".$arr[0]['rad_filename']."<br>";
echo "主持人:".$arr[0]['rad_author']."<br>";
echo "時間:".$arr[0]['rad_time_broadcast']."<br>";
echo "種類:".$arr[0]['rad_type']."<br>";
echo "來賓:".$arr[0]['rad_guest']."<br>";
echo "點擊數:".$arr[0]['rad_broad_num']."<br>";
echo "喜歡:".$arr[0]['rad_like']."<br>";
echo "不喜歡:".$arr[0]['rad_unlike']."<br>";

*/ 

?>
<button onclick="goBack()" style="font-size: 16px;">上一頁</button>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
<table style="width: 100%" cellpadding="5">
	<tr>
		<td colspan="4" class="style1">節目內容</td>
	</tr>
	<tr>
		<td class="style5" style="width: 225px">主題名稱:</td>
		<td class="style3" style="width: 20%"><?php echo $arr[0]['rad_title'];?></td>
		<td class="style5" style="width: 225px">節目簡介:</td>
		<td class="style4" ><?php echo $arr[0]['rad_sammary'];?></td>
	</tr>
	<tr>
		<td class="style5" style="width: 225px">主持人:</td>
		<td class="style3" style="width: 20%"><?php echo $arr[0]['rad_author'];?></td>
		<td class="style5" style="width: 225px">來賓姓名:</td>
		<td class="style4"><?php echo $arr[0]['rad_guest'];?></td>
	</tr>
	<tr>
		<td class="style5" style="width: 225px">節目種類:</td>
		<td class="style3" style="width: 20%"><?php echo $arr[0]['rad_type'];?></td>
		<td class="style5" style="width: 225px">LIKE:</td>
		<td class="style4"><?php echo $arr[0]['rad_like'];?></td>
	</tr>
	<tr>
		<td class="style5" style="width: 225px">點擊數:</td>
		<td class="style3" style="width: 20%"><?php echo $arr[0]['rad_broad_num'];?></td>
		<td class="style5" style="width: 225px">上傳時間:</td>
		<td class="style4"><?php echo $arr[0]['rad_time_broadcast'];?></td>
	</tr>
	<tr>
		<td class="style5" style="width: 225px">UNLIKE:</td>
		<td class="style3" style="width: 20%"><?php echo $arr[0]['rad_unlike'];?></td>
		<td class="style5" style="width: 225px">&nbsp;</td>
		<td class="style4">&nbsp;</td>
	</tr>
</table>

<body>

</body>
</html>