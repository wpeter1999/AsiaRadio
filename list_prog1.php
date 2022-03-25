<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
.style2 {
	text-align:center;
	background-color: #FFB600;
	color: #000392;
	font-family: Microsoft JhengHei;

}
.style3 {
	color: #FFFFFF;
	background-color: #9C6600;
	font-family: Microsoft JhengHei;
	text-align:center;
	font-size: 20px;
}
	
/* unvisited link */
a:link {
 	text-decoration: none;
	color: #000392;
	font-family: Microsoft JhengHei;

}

/* visited link */
a:visited {
 	text-decoration: none;
	color: #000392;
	font-family: Microsoft JhengHei;

}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: #000392;
	font-family: Microsoft JhengHei;

}

/* selected link */
a:active {
  	text-decoration: none;
	color: #000392;
	font-family: Microsoft JhengHei;

}


</style>
</head>

<body>
<?php
$front_data=$_GET['a'];//把前面程式的a變數的值存到$front_data
//echo $front_data;//把$front_data的值收到browser
require "config.php";
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_form WHERE rad_main_title='$front_data'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}
?>
<script>
function goBack() {
  window.history.go(-1);
}
</script>
<button onclick="goBack()" style="font-size: 16px;">上一頁</button>
<table style="width: 100%" class="style1">
	<tr>
		<td class="style3">節目內容</td>
	</tr>
	<?php for($i=0; $i<$number_result; $i++){ ?>
	<tr>
		<td class="style2"><?php echo "<a href='list_all.php?a=".$arr[$i]['rad_sn']."'>".$arr[$i]['rad_title']."</a><br>";?></td>
	</tr>
	<?php }?>
</table>


</body>
</html>