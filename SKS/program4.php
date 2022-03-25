<?php
include "sucess_login2.php";
$id=$_SESSION['m_id'];
$author=$_SESSION['m_name'];
require "config.php";
$sql="SELECT * FROM rad_form WHERE rad_author='$author' AND rad_del='0' ORDER by rad_date_broadcast DESC";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}

$sql2="SELECT * FROM rad_prog WHERE rp_user_id='$id' AND rp_old='0'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}

$num=$number_result/10;
$num2=$number_result%10;
$total=ceil($num);
$total2=intval($num);
$emptyArry=array();

if(isset($_GET['j'])){
	$j=$_GET['j'];
}else{
	$j=0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
/*超連結設定 */
a:link {
 	text-decoration: none;
	color: #0031CD;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: #0031CD;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: #0031CD;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: #0031CD;
}
</style>
</head>

<body>
<p>
<table width="748" border="0" cellspacing="4" cellpadding="4">
  <tr>
    <td width="455" align="center" bgcolor="#FFFFFF"></td>
    <td width="158" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="44" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="39" bgcolor="#FFFFFF"><a href="program_insert.php">新增</a></td>
  </tr>
  <tr>
    <td width="455" align="center" bgcolor="#B2CDFF">節目名稱</td>
    <td width="158" align="center" bgcolor="#B2CDFF">主題名稱</td>
    <td width="44" bgcolor="#B2CDFF">&nbsp;</td>
    <td width="39" bgcolor="#B2CDFF">&nbsp;</td>
  </tr>
<?php
$initial=$j*10;
if($j==$total2){
	$end=$initial+$num2;
	//echo "a<br>";
	//echo $total2."<br>";
}else{
	$end=$initial+10;
	//echo "b";
}
/*
echo $j."<br>";
echo $total."<br>";
echo $total2."<br>";
echo $initial."<br>";
echo $end;
*/
for($i=$initial; $i<$end; $i++){
	?>

    
    <?php
	
    foreach ($arr2 as $key=>$row) {
		if($row['rp_sn']==$arr[$i]['rad_main_title']){
		
	?>
	<tr>
	<td bgcolor="#CDF1FF"><?php echo $arr[$i]['rad_title']?></td>
    <td bgcolor="#CDF1FF"><?php echo $row['rp_name']?></td>
	<td bgcolor="#CDF1FF"><a href="edit_rad.php?a=<?php echo $arr[$i]['rad_sn']?>">修改</a></td>
    <td bgcolor="#CDF1FF"><a href="delete_rad.php?a=<?php echo $arr[$i]['rad_sn']?>" onclick="if (confirm('確認刪除所選項目?')){return true;}else{event.stopPropagation(); event.preventDefault();};">刪除</a></td>
	</tr>
    <?php
		}
	}
	?>

  
<?php
}
?>
<tr>
<td colspan="4" align="center">
<?php
for($iii=0;$iii<$total;$iii++){
	$a=$a."<a href=program4.php?j=".$iii.">".$iii."</a>&nbsp;";
}
echo substr($a,0,strlen($a)-7);
?>
</td>
</tr>
</table>
</p>

</body>
</html>