<?php
include "sucess_login2.php";
require "config.php";
$author=$_SESSION['m_name'];
$id=$_SESSION['m_id'];
$prog1=$_POST['p'];
$sql2 = "SELECT * FROM rad_prog WHERE rp_user_id='$id' AND rp_old='0'"; //搜索資料指令
$result2 = mysqli_query( $link, $sql2 ); //執行指令,並把結果存到result
$number_result2 = mysqli_num_rows( $result2 ); //符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for ( $ii = 0; $ii < $number_result2; $ii++ ) {
  $arr2[ $ii ] = mysqli_fetch_array( $result2 );
}

foreach($arr2 as $key=>$row){
	if($row['rp_name']==$prog1){
		$prog=$row['rp_sn'];
	}
}
$id1=$_POST['id'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$w=$_POST['w'];
$r=$_POST['r'];
$da=$_POST['da'];
$date_day=$_POST['date_day'];
$date_day2=date('Y-m-d', strtotime($date_day.'+ 7 day'));
$month=idate("m");
$month2=idate("m",strtotime($date_day2));
$title=$_POST['title'];
$intro=$_POST['intro'];
$guest=$_POST['guest'];
$prog_type=$_POST['prog_type'];
/*
echo $month."<br>";
echo $month2."<br>";
echo $p."<br>";
echo $t1."<br>";
echo $t2."<br>";
echo $w."<br>";
echo $date_day."<br>";
echo $guest."<br>";
echo $prog_type."<br>";
echo $title."<br>";
echo $intro."<br>";
echo $prog;
*/

$sql="UPDATE rad_day SET rad_title='$title', rad_sammary='$intro', rad_type='$prog_type', rad_guest='$guest' WHERE rad_sn='$id1'";

$sql3="UPDATE rad_timetable SET rt_add_new='1' WHERE rt_sn='$id1'";
$result3=mysqli_query($link,$sql3);

if (mysqli_query($link,$sql)) {
	$url="date_scheduling2.php?w=".$w."&t=".$t1."&p=".$prog1."&date_day=".$date_day2."&r=".$r."&id=".$id1;
	header("location: $url");
} else {
    echo "Error: " . $sql . "" . mysqli_error($link);
}

?>