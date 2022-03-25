<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>主持人</title>


<style type="text/css">

.style2 {
	background-color: #FFE495;
	color: #000392;
	vertical-align:text-top;
	padding-left: 8px;
	font-family: Microsoft JhengHei;
}
.style3 {
	color: #FFFFFF;
	background-color: #FFB600;
	font-family: Microsoft JhengHei;
}
.style4 {
	vertical-align:text-top;
	padding-top: 8px;
	padding-left: 8px;
	color: #FFFFFF;
	background-color: #9C6600;
	font-family: Microsoft JhengHei;
}
.style5 {
	vertical-align:text-top;
	padding-top: 8px;
	padding-left: 8px;
	color: #FFFFFF;
	background-color: #9C6600;
	font-family: Microsoft JhengHei;
	line-height: 26px;
}
/* image border                  */
.img-frame-cap {
        width: 110px;
		height: 130px;
        background:rgba(150,150,150,0.3);
        padding: 2px 2px 2px 2px;
		border-radius: 5px;
        
      }
.caption {
        text-align: center;
        margin-top: 4px;
        font-size: 12px;
		color:#FFF;
 }
 .captionText {
	 	float:left;
        text-align: center;
        margin-top: -130px;
		margin-left: 140px;
        font-size: 12px;
		color:#FFF;
		text-align:left;
 }
 div.imageborder {
        border-radius: 999em;
        width: 80px;
        height: 80px;
        padding: 5px;
        line-height: 0;
        border: 10px solid #000;
        background-color: #eee;
		
      }
div.imageborder>img {
        border-radius: 999em;
        height: 100%;
        width: 100%;
        margin: 0;
		
      }
	  
a:link {
 	text-decoration: none;
	color: #000392;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: #000392;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: #000392;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: #000392;
}


</style>
</head>

<body>
<?php

$front_data=$_GET['c'];
require "config.php";//include a php file - config.php
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_author WHERE ra_sn='$front_data'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}


$p=$arr[0]['ra_sn'];

$sql2="SELECT * FROM rad_prog WHERE rp_user_id='$p' AND rp_old='0'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}
?>

<table style="width: 100%">
	<tr>
		<td colspan="1" rowspan="2" style="width: 130px; ">
			<img src="images/<?php echo $arr[0]['ra_image']?>" height="130" width="130" alt=""/>
      </div>
		</td>
		<td style="height: 36px; width: 130px" class="style4">主持人:</td>
		<td style="height: 36px" class="style2"><?php echo $arr[0]['ra_name']?></td>
	</tr>
	<tr>
		<td style="height: 36px; width: 130px" class="style4">介紹:</td>
		<td style="height: 36px" class="style2"><?php echo $arr[0]['ra_intro']?></td>
	</tr>
	<tr>
		<td style="height: 35px; padding-left: 8px;" colspan="4" class="style3">目前主持的節目有:</td>
	</tr>
	    <?php 
		for($ii=0; $ii<$number_result2; $ii++){
					/*利用節目項目尋找次節目主題*/
					$prog_id=$arr2[$ii]['rp_sn'];
					$sql3="SELECT * FROM rad_form WHERE rad_main_title='$prog_id'";//搜索資料指令
					$result3=mysqli_query($link,$sql3);//執行指令,並把結果存到result
					$number_result3=mysqli_num_rows($result3);//符合條件的查詢結果的筆數

					/*  查詢結轉成果array             */
						for($iii=0; $iii<$number_result3; $iii++){
						$arr3[$iii]=mysqli_fetch_array($result3);
						}	

						/*利用節目項目尋找次節目主題*/		
		?>
	<tr>
		<td style="height: 35px; width: 130px; padding-left: 10px; font-family: Microsoft JhengHei; " colspan="4" class="style5"><?php echo $arr2[$ii]['rp_name'] ?></td>
		<!--<td style="height: 35px" colspan="3" class="style4"></td>-->
	</tr>
	<?php
    for($iii=0; $iii<$number_result3; $iii++){
	?>
    <!-- 呈現用節目主題 -->
	<tr>
		<td style="height: 40px font-family: Microsoft JhengHei; vertical-align:middle; padding-left: 80px;" colspan="3" class="style2"><?php echo "<a href='list_all.php?a=".$arr3[$iii]['rad_sn']."'>".$arr3[$iii]['rad_title']."</a>";?></td>
		<!--<td style="height: 38px font-family: Microsoft JhengHei; vertical-align:middle;" colspan="3" class="style2"></td>-->
	</tr>
	<?php
	}
	?>
    
    <?php
	}
	?>
</table>

</body>

</html>
