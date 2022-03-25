<?php
include "sucess_login2.php";
$id = $_SESSION[ 'm_id' ];
$author = $_SESSION[ 'm_name' ];
require "config.php";
$sql = "SELECT * FROM rad_timetable WHERE rt_author='$id' AND rt_child='0' ORDER BY rt_day, rt_sn ASC"; //搜索資料指令
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
<title>星期</title>
<style type="text/css">
/*超連結設定 */
a:link {
 	text-decoration: none;
	color: blue;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: blue;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: blue;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: blue;
}
.style1 {
	color: #FFFFFF;
	background-color: #00C8C8;
}
.style2 {
	background-color: #DBFFFF;
}
</style>
</head>

<body>

<table style="width: 100%">
	<tr>
		<td style="width: 90px" class="style1">星期</td>
		<td style="width: 100px" class="style1">時間</td>
		<td class="style1">主題名稱</td>
		<td style="width: 80px" class="style1">新增</td>
		<td style="width: 74px" class="style1">修改</td>
	</tr>
	<?php for($i=0;$i<$number_result;$i++){ ?>
	<tr>
		<td style="width: 90px; background: #FFFE8C" class="style2"><?php echo $arr[$i]['rt_day'] ?></td>
		<?php if(strlen($arr[$i]['rt_relate'])>0){ 
				$t1=$arr[$i]['rt_time'];
				$t2=date('H:i:s',strtotime("+1 hours",strtotime($t1)));

		}else{
				$t2=date('H:i:s',strtotime("+30 minutes",strtotime($t1)));
		}
		?>
		<td style="width: 100px" class="style2"><?php echo $arr[$i]['rt_time'] ?>--<?php echo $t2?></td>
		<td class="style2"><?php echo $arr[$i]['rt_prog'] ?></td>
		<?php if($arr[$i]['rt_add_new']==0){ ?>
		<td style="width: 80px" class="style2"><a href="date_scheduling.php?w=<?php echo $arr[$i]['rt_day']?>&t=<?php echo $arr[$i]['rt_time'] ?>&p=<?php echo $arr[$i]['rt_prog'] ?>&r=<?php echo $arr[$i]['rt_relate']?>&id=<?php echo $arr[$i]['rt_sn']?>">新增</a></td>
		<td style="width: 74px" class="style2">修改</td>
		<?php
		}else{
		?>
		<td style="width: 80px" class="style2">新增</td>
		<td style="width: 74px" class="style2"><a href="date_scheduling2.php?w=<?php echo $arr[$i]['rt_day']?>&t=<?php echo $arr[$i]['rt_time'] ?>&p=<?php echo $arr[$i]['rt_prog'] ?>&r=<?php echo $arr[$i]['rt_relate']?>&id=<?php echo $arr[$i]['rt_sn']?>">修改</a></td>
		<?php
		}
		?>
	</tr>
	<?php
	}
	?>
</table>

</body>

</html>
