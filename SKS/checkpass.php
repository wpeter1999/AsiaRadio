<?php
$id_input=$_POST['id_input'];
$pass_input=$_POST['pass_input'];
require "../config.php";
$sql2="SELECT * FROM rad_author WHERE ra_id='$id_input' AND ra_pass='$pass_input'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
} 
$b=$arr2[0]['ra_name'];
if($number_result2>0){
	session_save_path('session_data');
	session_start(); 
	$_SESSION['check']="ok";
	$_SESSION['m_name']=$b;
	header("location: page1.php");
}else{
	header("location: login.php?no=1");
}

?>