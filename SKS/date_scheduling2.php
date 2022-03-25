<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- Script --> 
<script type='text/javascript'> 
function submitForm(){ 
  // Call submit() method on <form id='myform'>
  document.getElementById('myform').submit(); 
} 
</script>
</head>
<?php
$month=date("m");//月份
//echo $month;
//echo nl2br("\r\n"); //空格的意思
$year=date("Y");//年份
//echo $year;
//echo nl2br("\r\n");
$month2=$month+1;
$date1=date_create($year."-".$month."-01");//年-月-01
$date2=date_create($year."-".$month2."-01");//年-月-01
//echo nl2br("\r\n");
$day1=date('w', strtotime($year.$month.'01'));//查出星期幾
$day2=date('w', strtotime($year.$month2.'01'));//查出星期幾
$totaldays=date("t",strtotime($year."-".$month."-01"));//本月總天數
$totaldays2=date("t",strtotime($year."-".$month2."-01"));//本月總天數
//echo nl2br("\r\n");
$day=0;
$day00=0;
$time="00:00";
$week=$_GET['w'];
$t=$_GET['t'];
$r=$_GET['r'];
$id=$_GET['id'];
$prog=$_GET['p'];
$totalday=0;
if($week==7){
$week=0;
}
if(isset($_POST['sortby'])){
echo $_POST['sortby'];
}
if(strlen($r)>0){
	$r=1;
}else{
	$r=0;
}
?>

<body>
<input type ="button" onclick="location.href='date_table.php'" value="上一頁"></input>
<br>
<?php echo $month?>月排程

<table width="800" height="228" border="0" cellpadding="4" cellspacing="4">

	<tbody>
	<tr>
	  <td bgcolor="#FFBBBB">時間\日期</td>
	  <td bgcolor="#FFBBBB">星期日</td>
	  <td bgcolor="#FFBBBB">星期一</td>
	  <td bgcolor="#FFBBBB">星期二</td>
	  <td bgcolor="#FFBBBB">星期三</td>
	  <td bgcolor="#FFBBBB">星期四</td>
	  <td bgcolor="#FFBBBB">星期五</td>
	  <td bgcolor="#FFBBBB">星期六</td>
	</tr>
	<?php for($i=0; $i<6; $i++){?>
	<tr>
		<td bgcolor="#DBFFFF">&nbsp;</td>
		<?php for($j=0; $j<7; $j++){
		if($day>$day1-1 & $day<$totaldays+$day1){
			if($j==$week){
				
		?>
		<td bgcolor="#DBFFFF" align="center"><a href="scheduling_edit.php?w=<?php echo $week?>&t=<?php echo $t?>&p=<?php echo $prog?>&date_day=<?php echo date_format($date1,"Y-m-d")?>&r=<?php echo $r?>&id=<?php echo $id?>&da=<?php echo date_format($date1,"Y-m-d");?>"><?php echo date_format($date1,"Y-m-d")?></a></td>
		<?php
		}else{
		?>
		<td bgcolor="#DBFFFF" align="center"><?php echo date_format($date1,"Y-m-d")?></td>
		<?php
		}
		$date1=date_add($date1,date_interval_create_from_date_string("1 day"));
		}else{
		?> 
		<td bgcolor="#DBFFFF"></td>
		<?php }
		$day=$day+1; //累加
		}?>
	</tr>
	<?php }?>
	</tbody>
</table>
<br>
<?php echo $month2?>月排程
<table width="800" height="228" border="0" cellpadding="4" cellspacing="4">

	<tr>
	  <td bgcolor="#FFBBBB">時間\日期</td>
	  <td bgcolor="#FFBBBB">星期日</td>
	  <td bgcolor="#FFBBBB">星期一</td>
	  <td bgcolor="#FFBBBB">星期二</td>
	  <td bgcolor="#FFBBBB">星期三</td>
	  <td bgcolor="#FFBBBB">星期四</td>
	  <td bgcolor="#FFBBBB">星期五</td>
	  <td bgcolor="#FFBBBB">星期六</td>
	</tr>
	<?php for($i=0; $i<6; $i++){?>
	<tr>
		<td bgcolor="#DBFFFF">&nbsp;</td>
		<?php for($j=0; $j<7; $j++){
		if($day00>$day2-1 & $day00<$totaldays2+$day2){
			if($j==$week){
				
		?>
		<td bgcolor="#DBFFFF" align="center"><a href="scheduling_edit.php?w=<?php echo $week?>&t=<?php echo $t?>&p=<?php echo $prog?>&date_day=<?php echo date_format($date2,"Y-m-d")?>&r=<?php echo $r?>&id=<?php echo $id?>>&da=<?php echo date_format($date2,"Y-m-d");?>"><?php echo date_format($date2,"Y-m-d")?></a></td>
		<?php
		}else{
		?>
		<td bgcolor="#DBFFFF" align="center"><?php echo date_format($date2,"Y-m-d")?></td>
		<?php
		}
		$date2=date_add($date2,date_interval_create_from_date_string("1 day"));
		}else{
		?> 
		<td bgcolor="#DBFFFF"></td>
		<?php }
		$day00=$day00+1; //累加
		}?>
	</tr>
	<?php }?>
	</table>
</body>
</html>