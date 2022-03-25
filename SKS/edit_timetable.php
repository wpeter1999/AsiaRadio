<?php
include "sucess_login2.php";
$sn=$_GET['a'];
$id=$_SESSION['m_id'];
$author=$_SESSION['m_name'];
$time="00:00";
require "config.php";
$sql="SELECT * FROM `rad_timetable` as a, rad_author as b WHERE a.rt_author= b.ra_sn AND a.rt_sn='$sn'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?php

if($arr[0]['ra_sn']==$id){
	echo "<a href='edit_new_program.php?a=".$sn."'>修改</a>, "."<a href=del_timetable.php?a=".$sn.">刪除</a><br>";
}
switch ($arr[0]['rt_day']) {
    case "1":
        echo "星期一<br>";
        break;
    case "2":
        echo "星期二<br>";
        break;
    case "3":
        echo "星期三<br>";
		break;
	case "4":
        echo "星期四<br>";
		break;
    case "5":
        echo "星期五<br>";
		break;
    case "6":
        echo "星期六<br>";
		break;
    case "7":
        echo "星期日<br>";
		break;
}
echo "廣播時間: ".$arr[0]['rt_time']."<br>";
echo "主題名稱: ".$arr[0]['rt_prog']."<br>";
echo "主持人: ".$arr[0]['ra_name']."<br>";
echo "主持人介紹: ".$arr[0]['ra_intro']."<br>";

?>
</body>
</html>