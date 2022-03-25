
<?php
include "sucess_login2.php";
require "config.php";
$rad_sn=$_POST['rad_sn'];
$prog=$_POST['select'];//節目主題
$prog_title=$_POST['textfield'];//單元名稱
$prog_intro=$_POST['textarea'];//簡介
$prog_date=$_POST['textfield2'];//播放日期
$prog_type=$_POST['prog_type'];//節目類別
$prog_time_start= $_POST['time_start'];//播放時間
/*
echo $rad_sn."<br>";
echo $prog."<br>";
echo $prog_title."<br>";
echo $prog_intro."<br>";
echo $prog_date."<br>";
echo $prog_type."<br>";
/*
if(strstr( $prog_time_start, 'pm' )){
	$prog_time_start=substr($prog_time_start,0,strripos($prog_time_start, ' ' ));
	$prog_time_start = date('H:i',strtotime('+12 hour',strtotime($prog_time_start)));
}else{
	$prog_time_start=substr($prog_time_start,0, strripos($prog_time_start, ' ' ));
}*/

//echo $prog_time_start."<br>";

$prog_time_end=$_POST['time_end'];//結束時間
/*
if(strstr( $prog_time_end, 'pm' )){
	$prog_time_end=substr($prog_time_end,0, strripos($prog_time_end, ' ' ));
	$prog_time_end = date('H:i',strtotime('+12 hour',strtotime($prog_time_end)));
}else{
	$prog_time_end=substr($prog_time_end,0, strripos($prog_time_end, ' ' ));
}
*/

//echo $prog_time_end."<br>";
$prog_visitor=$_POST['textfield5'];//參與來賓
$prog_file_mp3=$_FILES['fileField6']['name'];//語音檔上載
$name=$_SESSION['m_name'];
//echo $prog_visitor;
if ($_FILES['fileField6']['error'] === UPLOAD_ERR_OK){
$file = $_FILES['fileField6']['tmp_name'];
$file2 = $_FILES['fileField6']['name'];
	//$sub_file=substr($file2,strlen($file2)-4,4);
	$sub_file=substr($file2, strrpos($file2, '.' ));
	$filename=$id.time().$sub_file;
	$dest = '../mp3/'.$filename;

    # 將檔案移至指定位置
    move_uploaded_file($file, $dest);
}else{
	$filename=$_POST['rad_filename'];
}

$sql = "UPDATE rad_form SET rad_main_title='$prog',rad_title='$prog_title',rad_sammary='$prog_intro',rad_date_broadcast='$prog_date',rad_type='$prog_type',rad_time_broadcast='$prog_time_start',rad_end_broadcast='$prog_time_end',rad_filename='$filename',rad_guest='$prog_visitor' WHERE rad_sn='$rad_sn'";

if (mysqli_query($link,$sql)) {
               header("location: program4.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
}
?>

