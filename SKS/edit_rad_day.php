<?php
include "sucess_login2.php";
require "config.php";

$rad_sn=$_GET['a'];
$author=$_SESSION['m_name'];
$id=$_SESSION['m_id'];
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql = "SELECT DISTINCT rad_type FROM rad_form;";
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}

$sql2 = "SELECT * FROM rad_prog WHERE rp_user_id='$id' AND rp_old='0'";
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}

$sql3 = "SELECT * FROM rad_form WHERE rad_sn='$rad_sn'";
$result3=mysqli_query($link,$sql3);//執行指令,並把結果存到result
$number_result3=mysqli_num_rows($result3);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($iii=0; $iii<$number_result2; $iii++){
$arr3[$iii]=mysqli_fetch_array($result3);
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
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({ 
        dateFormat: 'yy-mm-dd'
    });
    $( "#format" ).change(function() {
      var fromdate = $(this).val();
                alert(fromdate);
    });
  });
  </script>
</head>

<body>
<form action="edit_rad2.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
    <td width="196"><select name="select" id="select">
      	<?php for($ii=0; $ii<$number_result2; $ii++){  ?>
        <option value="<?php echo $arr2[$ii]['rp_sn'] ?>"><?php echo $arr2[$ii]['rp_name'] ?></option>
        
        <?php } ?>
      </select></td>
    <td width="185" bgcolor="#CDF1FF">主持人</td>
    <td width="186"><?php echo $author ?></td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">標題</td>
    <td colspan="3">
      <?php echo $arr3[0]['rad_title']?></td>
    </tr>
  <tr>
    <td valign="top" bgcolor="#CDF1FF">簡介</td>
    <td colspan="3">
      <textarea name="textarea" cols="69" rows="5" id="textarea" ><?php echo $arr3[0]['rad_sammary']?></textarea></td>
    </tr>
  <tr>
    <td bgcolor="#CDF1FF">播放日期</td>
    <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="datepicker" value="<?php echo $arr3[0]['rad_date_broadcast']?>"/></td>
    <td bgcolor="#CDF1FF">節目類別</td>
    <td><input type=text list=browsers name="prog_type" value="<?php echo $arr3[0]['rad_type']?>">
		<datalist id=browsers >
        <?php for($i=0; $i<$number_result; $i++){?>
   		<option><?php echo $arr[$i]['rad_type']?></option>
   		
        <?php }?>
	  </datalist></td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">播放時間</td>
    <td>
	<input type="time" name="time_start" id="time" value="<?php echo $arr3[0]['rad_time_broadcast']?>"/>
    </td>
    <td bgcolor="#CDF1FF">結束時間</td>
    <td>
	<input type="time" name="time_end" id="time" value="<?php echo $arr3[0]['rad_end_broadcast']?>"/>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CDF1FF">參與來賓</td>
    <td colspan="3">
      <input type="text" name="textfield5" id="textfield5" value="<?php echo $arr3[0]['rad_guest']?>"/></td>
    </tr>
  <tr>
    <td bgcolor="#CDF1FF">語音檔上載</td>
    <td>
      <?php echo $arr3[0]['rad_filename']?><input type="file" name="fileField6" id="fileField6" /></td>
    <td>
	</td>
    <td><input type="hidden" name="rad_sn" id="id1" value=<?php echo $rad_sn ?>><input type="hidden" name="rad_filename" id="id1" value=<?php echo $arr3[0]['rad_filename']?>></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#B2CDFF"><input type="reset" name="button" id="button" value="重設" /></td>
    <td colspan="2" align="right" bgcolor="#B2CDFF"><input type="submit" name="button2" id="button2" value="送出" onclick="if (confirm('確認修改此項目?')){return true;}else{event.stopPropagation(); event.preventDefault();};"/></td>
    </tr>
</table>

</form>
</body>
</html>