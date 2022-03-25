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
$sn=$_GET['a'];

$sql="SELECT * FROM rad_timetable WHERE rt_sn='$sn'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數
/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
} 
/**author 的主題                   **/
$rpAuthor=$_SESSION['m_id'];
$sql2="SELECT rp_name FROM rad_prog WHERE rp_user_id='$rpAuthor' and rp_old='0'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數
/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
} 
$newSN=$sn+7;
if($newSN>336){
	$next="1";
}else{
$sql3="SELECT * FROM rad_timetable WHERE rt_sn='$newSN'";//搜索資料指令
$result3=mysqli_query($link,$sql3);//執行指令,並把結果存到result
$number_result3=mysqli_num_rows($result3);//符合條件的查詢結果的筆數
/*  查詢結轉成果array             */
for($iii=0; $iii<$number_result3; $iii++){
$arr3[$iii]=mysqli_fetch_array($result3);
} 
$next=$arr3[0]['rt_oc'];
}
$time1=date('H:i:s',strtotime("+30 minutes",strtotime($arr[0]['rt_time'])));
$time2=date('H:i:s',strtotime("+30 minutes",strtotime($time1)));

switch($arr[0]['rt_day']){
	case 1:
	$day="星期一";
	break;
	
	case 2:
	$day="星期二";
	break;
	
	case 3:
	$day="星期三";
	break;
	
	case 4:
	$day="星期四";
	break;
	
	case 5:
	$day="星期五";
	break;
	
	case 6:
	$day="星期六";
	break;
	
	case 7:
	$day="星期日";
	break;
}
?>
<form id="form1" name="form1" method="post" action="insert_new_program2.php">
  <table width="866" border="0" cellspacing="4" cellpadding="4">
    <tr>
      <td colspan="4" align="center" bgcolor="#999999">時段新増</td>
    </tr>
    <tr>
      <td width="136" bgcolor="#CCCCCC">rt_grid</td>
      <td width="233"><input type="text" name="textfield" id="textfield" value="<?php echo $arr[0]['rt_grid']?>" disabled /></td>
      <td width="139" bgcolor="#CCCCCC">主持人rt_author</td>
      <td width="306"><input type="text" name="textfield4" id="textfield4" value="<?php echo $_SESSION['m_name']?>" disabled /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">廣播時段(半小時)</td>
      <td><input type="text" name="textfield2" id="textfield2" value="<?php echo $arr[0]['rt_time']?>" disabled />
      到<br><?php echo $time1 ?></td>
      
      <?php if($next=='0'){?>
      <td bgcolor="#CCCCCC">增加時段(半小時)</td>
      <td><input type="checkbox" name="checkbox" id="checkbox" />到<br><?php echo $time2 ?></td>
       <?php }else{?>
       <td bgcolor="#CCCCCC"></td>
      	<td></td>
       <?php }?>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">廣播日rt_day</td>
      <td><input type="text" name="textfield3" id="textfield3" value="<?php echo $day?>" disabled /><input type="hidden" name="day" id="day" value="<?php echo $arr[0]['rt_day']?>" disabled /></td>
      <td bgcolor="#CCCCCC">節目主題rt_prog</td>
      <td><select name="select" id="select">
      <?php
      	for($ii=0; $ii<$number_result2; $ii++){
	  ?>
        <option value="<?php echo $arr2[$ii]['rp_name']?>"><?php echo $arr2[$ii]['rp_name']?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><input type="hidden" name="sn" id="sn" value="<?php echo $sn ?>"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="確定新增" /></td>
    </tr>
    
  </table>
</form>
</body>
</html>