<?php
include "sucess_login2.php";
require "config.php";
$prog = $_POST[ 'select' ]; //節目主題
$prog_title = $_POST[ 'textfield' ]; //標題
$prog_intro = $_POST[ 'textarea' ]; //簡介
$prog_date = $_POST[ 'textfield2' ]; //播放日期
$prog_type = $_POST[ 'prog_type' ]; //節目類別
$prog_time_start = $_POST[ 'time_start' ]; //播放時間
/*
echo $prog."<br>";
echo $prog_title."<br>";
echo $prog_intro."<br>";
echo $prog_date."<br>";
echo $prog_type."<br>";

if(strstr( $prog_time_start, 'pm' )){
	$prog_time_start=substr($prog_time_start,0,strripos($prog_time_start, ' ' ));
	$prog_time_start = date('H:i',strtotime('+12 hour',strtotime($prog_time_start)));
}else{
	$prog_time_start=substr($prog_time_start,0, strripos($prog_time_start, ' ' ));
}

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
$prog_visitor = $_POST[ 'textfield5' ]; //參與來賓
$prog_file_mp3 = $_FILES[ 'fileField6' ][ 'name' ]; //語音檔上載
$name = $_SESSION[ 'm_name' ];
//echo $prog_visitor;

if ( $_FILES[ 'fileField6' ][ 'error' ] === UPLOAD_ERR_OK ) {
  $file = $_FILES[ 'fileField6' ][ 'tmp_name' ];
  $file2 = $_FILES[ 'fileField6' ][ 'name' ];
  //$sub_file=substr($file2,strlen($file2)-4,4);
  $sub_file = substr( $file2, strrpos( $file2, '.' ) );
  $file3 = $id . time() . $sub_file;
  $dest = '../mp3/' . $file3;

  # 將檔案移至指定位置
  move_uploaded_file( $file, $dest );
}

$sql = "INSERT INTO rad_form (rad_main_title, rad_title, rad_sammary, rad_date_broadcast, rad_type, rad_time_broadcast, rad_end_broadcast, rad_guest, rad_filename, rad_author) VALUES ('$prog', '$prog_title', '$prog_intro', '$prog_date', '$prog_type', '$prog_time_start', '$prog_time_end', '$prog_visitor', '$prog_file_mp3', '$name' )";

if ( mysqli_query( $link, $sql ) ) {
  header( "location: program4.php" );
} else {
  echo "Error: " . $sql . "" . mysqli_error( $link );
}
?>
