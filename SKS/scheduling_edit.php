<?php
include "sucess_login2.php";
require "config.php";
$id1=$_GET['id'];
$w=$_GET['w'];
$t=$_GET['t'];
$p=$_GET['p'];
$r=$_GET['r'];
$da=$_GET['da'];
if($r==1){
	$t2=date('H:i:s',strtotime("+1 hours",strtotime($t)));
}else{
	$t2=date('H:i:s',strtotime("+30 minutes",strtotime($t)));
}
$date_day=$_GET['date_day'];
$author=$_SESSION['m_name'];
$id=$_SESSION['m_id'];
$sql2="SELECT * FROM rad_day WHERE rad_date_broadcast='$da' AND rad_time_broadcast='$t'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數
//echo $number_result2;

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}

$sql="SELECT DISTINCT rad_type FROM rad_form";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
body, html {

  background: var(--bgColor);
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  height: 70%;
  align-items: baseline;
  justify-content: center;
  font-family: helvetica, arial, sans-serif;
}

input:focus {
  outline: 2px dashed #945;
  outline-offset: 3px;
}
</style>
<SCRIPT LANGUAGE="JavaScript" SRC="js/timepicker.js"></SCRIPT>


<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
</head>

<body>
<?php
if($number_result2>0){
/* found data */
?>
<form action="scheduling_edit2.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="793" border="0" cellspacing="2" cellpadding="4">
 	 <tr>
    <td bgcolor="#FFFFFF" colspan="4">
	<input type ="button" onclick="history.back()" value="上一頁"></input>
	</td>
  </tr>
  <tr>
    <td colspan="4" align="center" bgcolor="#B2CDFF">節目修改</td>
    </tr>
  <tr>
    <td width="174" bgcolor="#CDF1FF">節目主題</td>
    <td width="196">
	<?php echo $p ?>
	</td>
    <td width="185" bgcolor="#CDF1FF">主持人</td>
    <td width="186"><?php echo $author ?></td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">單元名稱</td>
    <td colspan="3">
    <input type="text" name="title" id="textfield" maxlength="50" value="<?php echo $arr2[0]['rad_type']?>"/>
	</td>
    </tr>
  <tr>
    <td valign="top" bgcolor="#CDF1FF">簡介</td>
    <td colspan="3">
      <textarea name="intro" cols="69" rows="5" id="textarea" maxlength="255"><?php echo $arr2[0]['rad_sammary']?></textarea></td>
    </tr>
  <tr>
    <td valign="top" bgcolor="#CDF1FF">星期:</td>
    <td colspan="3">
	<?php 
	switch ($w) {
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
    case "0":
        echo "星期日<br>";
		break;
	}
		?>
		</td>
   </tr>
	
  <tr>
    <td bgcolor="#CDF1FF">播放日期</td>
    <td><?php echo $arr2[0]['rad_date_broadcast']?></td>
    <td bgcolor="#CDF1FF">節目類別</td>
    <td>
      <input type=text list=browsers name="prog_type" value="<?php echo $arr2[0]['rad_type']?>">
		<datalist id=browsers >
        <?php for($i=0; $i<$number_result; $i++){?>
   		<option><?php echo $arr[$i]['rad_type']?></option>
   		
        <?php }?>
	  </datalist>
	</td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">播放時間</td>
    <td>
	<?php
	echo $t;
	?>
    </td>
    <td bgcolor="#CDF1FF">結束時間</td>
    <td>
	<?php
	echo $t2;
	?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">參與來賓</td>
    <td colspan="3">
      <input type="text" name="guest" id="textfield5" maxlength="50" value="<?php echo $arr2[0]['rad_guest']?>"/></td>
    </tr>

  <tr>
    <td colspan="2" bgcolor="#B2CDFF"><input type="reset" name="button" id="button" value="重設" /></td>
    <td colspan="2" align="right" bgcolor="#B2CDFF"><input type="submit" name="button2" id="button2" value="送出" onclick="if (confirm('確認修改此項目?')){return true;}else{event.stopPropagation(); event.preventDefault();};"/></td>
	<td>
	<input type="hidden" name="p" id="p" value="<?php echo $p?>">
	<input type="hidden" name="t1" id="t1" value="<?php echo $t?>">
	<input type="hidden" name="t2" id="t2" value="<?php echo $t2?>">
	<input type="hidden" name="w" id="w" value="<?php echo $w?>">
	<input type="hidden" name="date_day" id="day" value="<?php echo $date_day?>">
	<input type="hidden" name="r" id="r" value="<?php echo $r?>">
	<input type="hidden" name="id" id="r" value="<?php echo $id1?>">
	<input type="hidden" name="da" id="r" value="<?php echo $da?>">
	</td>
    </tr>

</table>

</form>
<?php
}else{
/* unfound data */
?>
<form action="insert_rad_day3.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="793" border="0" cellspacing="2" cellpadding="4">
 	 <tr>
    <td bgcolor="#FFFFFF" colspan="4">
	<input type ="button" onclick="history.back()" value="上一頁"></input>
	</td>
  </tr>
  <tr>
    <td colspan="4" align="center" bgcolor="#B2CDFF">節目新增</td>
    </tr>
  <tr>
    <td width="174" bgcolor="#CDF1FF">節目主題</td>
    <td width="196">
	<?php echo $p ?>
	</td>
    <td width="185" bgcolor="#CDF1FF">主持人</td>
    <td width="186"><?php echo $author ?></td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">單元名稱</td>
    <td colspan="3">
    <input type="text" name="title" id="textfield" maxlength="50"/>
	</td>
    </tr>
  <tr>
    <td valign="top" bgcolor="#CDF1FF">簡介</td>
    <td colspan="3">
      <textarea name="intro" cols="69" rows="5" id="textarea" maxlength="255"><?php echo $arr3[0]['rad_sammary']?></textarea></td>
    </tr>
  <tr>
    <td valign="top" bgcolor="#CDF1FF">星期:</td>
    <td colspan="3">
	<?php 
	switch ($w) {
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
    case "0":
        echo "星期日<br>";
		break;
	}
		?>
		</td>
   </tr>
	
  <tr>
    <td bgcolor="#CDF1FF">播放日期</td>
    <td><?php echo $date_day?></td>
    <td bgcolor="#CDF1FF">節目類別</td>
    <td>
      <input type=text list=browsers name="prog_type">
		<datalist id=browsers >
        <?php for($i=0; $i<$number_result; $i++){?>
   		<option><?php echo $arr[$i]['rad_type']?></option>
   		
        <?php }?>
	  </datalist>
	</td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">播放時間</td>
    <td>
	<?php
	echo $t;
	?>
    </td>
    <td bgcolor="#CDF1FF">結束時間</td>
    <td>
	<?php
	echo $t2;
	?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">參與來賓</td>
    <td colspan="3">
      <input type="text" name="guest" id="textfield5" maxlength="50"/></td>
    </tr>

  <tr>
    <td colspan="2" bgcolor="#B2CDFF"><input type="reset" name="button" id="button" value="重設" /></td>
    <td colspan="2" align="right" bgcolor="#B2CDFF"><input type="submit" name="button2" id="button2" value="送出" onclick="if (confirm('確認新增此項目?')){return true;}else{event.stopPropagation(); event.preventDefault();};"/></td>
	<td>
	<input type="hidden" name="p" id="p" value="<?php echo $p?>">
	<input type="hidden" name="t1" id="t1" value="<?php echo $t?>">
	<input type="hidden" name="t2" id="t2" value="<?php echo $t2?>">
	<input type="hidden" name="w" id="w" value="<?php echo $w?>">
	<input type="hidden" name="date_day" id="day" value="<?php echo $date_day?>">
	<input type="hidden" name="r" id="r" value="<?php echo $r?>">
	<input type="hidden" name="id" id="r" value="<?php echo $id1?>">
	<input type="hidden" name="da" id="r" value="<?php echo $da?>">
	</td>
    </tr>

</table>

</form>
<?php
}

?>
<?php
//echo $w."<br>".$t."<br>".$p."<br>".$date_day;
?>
</body>
</html>