<?php
require "config.php";//include a php file - config.php
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_prog WHERE rp_old='1'";//搜索資料指令
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

<body><table style="width: 100%" border="0">
  <tbody>
    <tr>
      <th scope="row" style="background: #9C6600; color: white;">以下檔節目: </th>
    </tr>
	<?php
	for($i=0; $i<$number_result; $i++){
			$id=$arr[$i]['rp_sn'];
			$name=$arr[$i]['rp_name']
	?>
    <tr bgcolor="#FFB600">
    <th scope="row">
		<a style="line-height: 30px" href="list_prog1.php?a=<?php echo $id?>"><?php echo $name?></a>
	</th>

    </tr>
	<?php
	}
	?>
  </tbody>
</table>

</body>
</html>