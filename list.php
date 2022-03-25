<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
/* unvisited link */
a:link {
 	text-decoration: none;
	color: black;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: black;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: black;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: black;
}
</style>
</head>

<body>
<?php
require "config.php";//include a php file - config.php
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_from";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}
/*  查詢結轉成果array             */

for($i=0; $i<$number_result; $i++){
	echo "<a href='list_prog.php?a=".$arr[$i]['rad_sn']."'>".$arr[$i]['rad_title']."</a><br>";
}
?>

</body>
</html>