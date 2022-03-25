<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
include "sucess_login2.php";
require "config.php";
$rt_author=$_SESSION['m_name'];

$sql="SELECT * FROM rad_day ORDER BY rad_time_broadcast, rad_date_broadcast ASC";
	$result=mysqli_query($link,$sql);
	$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數
	for($j=0; $j<$number_result; $j++){
		$arr[$j]=mysqli_fetch_array($result);
	} 
foreach ($arr as &$record) {

$day1=date('w', strtotime($record['rad_date_broadcast']));//星期幾
$record['weekday'] = $day1;//add column and value to array


}
	


array_multisort( array_column($arr, "weekday"), SORT_ASC, $arr );
/*
for($j=0; $j<$number_result; $j++){
		echo $arr[$j]['rad_time_broadcasr']." --".$arr[$j]['rad_date_broadcast']." --".$arr[$j]['rad_title']." --".$arr[$j]['rad_main_title']."--".$arr[$j]['weekday']."<br>";
		
	} 
	*/
echo $rt_author."<br>";
?>
<table width="1090" border="0" cellspacing="4" cellpadding="4">
  
  <tr>
    <td width="80" bgcolor="#B1B1B1">星期</td>
    <td width="110" bgcolor="#999999">時間</td>
    <td width="180" bgcolor="#E4E4E4">第一星期</td>
    <td width="180" bgcolor="#E4E4E4">第二星期</td>
    <td width="180" bgcolor="#E4E4E4">第三星期</td>
    <td width="180" bgcolor="#E4E4E4">第四星期</td>
    <td width="180" bgcolor="#E4E4E4">第五星期</td>
    <td width="180" bgcolor="#E4E4E4">第六星期</td>
    <td width="180" bgcolor="#E4E4E4">第七星期</td>
    <td width="180" bgcolor="#E4E4E4">第八星期</td>
    <td width="180" bgcolor="#E4E4E4">第九星期</td>
    <td width="180" bgcolor="#E4E4E4">第十星期</td>
  </tr>
 <?php
$weekday=$arr[0]['weekday'];
$time=$arr[0]['rad_time_broadcast']; 
$weekday2=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
 ?>
		  <tr>
    		<td bgcolor="#B1B1B1"><?php echo $weekday2[$weekday]?></td>
			<td bgcolor="#999999"><?php echo $time ?></td>
	<?php 

 
 foreach ($arr as &$record1) { 
   	if($record1['weekday']==$weekday & $record1['rad_time_broadcast']==$time){
		//echo $record1['weekday']."--".$record1['rad_time_broadcast'];
 
 ?>		
 			<td bgcolor="#F1F1F1"><?php echo $record1['rad_date_broadcast']?><br><?php echo $record1['rad_author'] ?><br><a href=show_list_all.php?a=<?php echo $record1['rad_sn'].">".$record1['rad_title']."</a><br>".$record1['rad_time_broadcast']?></td>
 
   	<?php
    }else{
		//echo $record1['weekday']."--".$record1['rad_time_broadcast'];
		$weekday=$record1['weekday'];
		$time=$record1['rad_time_broadcast'];
		?>
        </tr>
        <tr>
    		<td bgcolor="#B1B1B1"><?php echo $weekday2[$record1['weekday']] ?></td>
			<td bgcolor="#999999"><?php echo $record1['rad_time_broadcast'] ?></td>
        <td bgcolor="#F1F1F1"><?php echo $record1['rad_date_broadcast']?><br><?php echo $record1['rad_author'] ?><br><a href=show_list_all.php?a=<?php echo $record1['rad_sn'].">".$record1['rad_title']."</a><br>".$record1['rad_time_broadcast']?>
       </td>
		<?php
	}
	
	
	}


 ?>
</table>

</body>
</html>