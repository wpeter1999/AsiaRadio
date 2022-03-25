<?php
require "config.php";
$id_input=$_POST['id_input'];
$pass_input1=$_POST['pass_input'];
$pass_input=md5($pass_input1);
$newpass=$_POST['newpass_input'];
$newpass2=$_POST['newpass_input2'];
if($newpass<>$newpass2){
	header("location: changepass1.php");
}
$sql2="SELECT * FROM rad_author WHERE ra_id='$id_input' AND ra_pass='$pass_input'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array  */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
} 
if($number_result2>0){

	$id=$arr2[0]['ra_sn'];
	$pass=md5($newpass);
	$sql="UPDATE rad_author SET ra_pass='$pass' WHERE ra_sn='$id'";
	$result3=mysqli_query($link,$sql);
	header("location: login2.php");

}else{
	header("location: login3.php?no=1");
}


?>