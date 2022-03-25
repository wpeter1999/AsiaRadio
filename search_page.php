<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<!-- fancy box !-->
<meta http-equiv="Content-Type" content="text/html" />
<meta http-equiv="imagetoolbar" content="no" />
<!-- fancy box !-->
<title>無標題文件</title>
</head>
<!-- fancy box !-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
						/*
			*   Examples - various
			*/

			$(".various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
<!-- fancy box !-->

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
	height: 40px;
}
a:link {
 	text-decoration: none;
	color: white;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: white;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: white;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: white;
}
</style>
<body>
<p>
<?php
$a=$_POST['search'];
require "config.php";
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_form WHERE rad_title like '%$a%'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}
//echo $a;
// 如果有找到就列出來，沒有就列"沒有找到你想搜尋的資料"
/*if($number_result>0){
	for($i=0; $i<$number_result; $i++){
	echo "<a href='search_final.php?a=".$arr[$i]['rad_sn']."'>".$arr[$i]['rad_title']."</a><br>".$arr[$i]['rad_sammary']."<p>";
	}
}else{
	echo "沒有找到你想搜尋的資料";
}*/
?>
<table style="width: 100%" class="style1">
	<tr>
		<td class="style3"><?php echo "搜尋結果"?></td>
	</tr>
	<?php for($i=0; $i<$number_result; $i++){ ?>
	<tr>
		<td class="style2"><?php echo "<br><a style='font-size: 18px;' href='list_all.php?a=".$arr[$i]['rad_sn']."'>".$arr[$i]['rad_title']."</a><br><br>";?></td>
	</tr>
	<?php }?>
</table>

</p>
</body>
</html>