<?php
error_reporting( E_ALL ^ E_NOTICE );
include "sucess_login2.php";

$id = $_SESSION['m_id'];
require "config.php";
$sql = "SELECT * FROM rad_author WHERE ra_sn='$id'"; //搜索資料指令
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
<!-- fancy box !-->
<meta http-equiv="Content-Type" content="text/html" />
<meta http-equiv="imagetoolbar" content="no" />
<!-- fancy box !-->
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>姓名</title>
<style type="text/css">
.style1 {
	margin-right: 0px;
	background-color: #239CB6;
}
.style2 {
	font-family: 微軟正黑體;
	font-size: medium;
	background-color: #FFFFFF;
}
.style3 {
	font-family: 微軟正黑體;
	font-size: medium;
	background-color: #00C8C8;
	color: #FFFFFF;
}
.style4 {
	font-family: 微軟正黑體;
	font-size: medium;
	background-color: #D5FFEF;
	text-align: right;
}
.style5 {
	font-family: 微軟正黑體;
	font-size: medium;
	background-color: #D5FFFF;
}
</style>
<!-- fancy box !-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="../style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
						/*
			*   Examples - various
			*/

			$(".various3").fancybox({
				'width'				: '40%',
				'height'			: '50%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				'onClosed'			:function(){window.location.reload();}
			});
		});
	</script>
<!-- fancy box !-->
</head>

<body>
<form method="post" action="author_edit2.php">
<table style="width: 600px; height: 225px" class="style1">
	<tr>
		<td class="style3" style="width: 123px">姓名:</td>
		<td class="style5" style="width: 340px"><?php echo $arr[0]['ra_name']?></td>
		<td class="style3" rowspan="4" valign="top" style="width: 91px">照片:</td>
		<td class="style2" rowspan="4">
		<img alt="" src="../images/<?php echo $arr[0]['ra_image']?>" width="150" height="150" /></td>
	</tr>
	<tr>
		<td class="style3" style="width: 123px">身分別:</td>
		<?php
		if($arr[0]['ra_status']==1){
		?>
		<td class="style5" style="width: 340px"><?php echo "系統管理員"?></td>
		<?php
		}else{
		?>
		<td class="style5" style="width: 340px"><?php echo "節目主持人"?></td>
		<?php
		}
		?>
	</tr>
	<tr>
		<td class="style3" style="width: 123px">性別:</td>
		<td class="style5" style="width: 340px"><?php echo $arr[0]['ra_sex']?></td>
	</tr>
	<tr>
		<td class="style3" valign="top" style="width: 123px; height: 83px">簡介:</td>
		<td class="style5" style="height: 83px; width: 340px" valign="top">
			<textarea name="TextArea1" style="width: 340px; height: 80px"><?php echo $arr[0]['ra_intro']?></textarea>
		</td>
	</tr>
	<tr>
		<td class="style4" colspan="2"><input type="submit" name="submit" id="submit" value="送出" /></td>
		<td class="style4" colspan="2"><a class="various3" href="image_change.php"><input type="button" name="button" id="button" value="換照片" /></a></td>
	</tr>
	</table>
</form>
</body>

</html>
