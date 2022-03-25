<?php
$id_input=$_POST['id_input'];
$email_input1=$_POST['email_input'];
//$pass_input1=$_POST['pass_input'];
//$pass_input=md5($pass_input1);
require "config.php";
$sql2="SELECT * FROM rad_author WHERE ra_id='$id_input' AND ra_email='$email_input1'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
} 

if($number_result2>0){
	$id=$arr2[0]['ra_sn'];
	$pass=generateRandomString();
	echo $pass;
	$pass2=md5($pass);
	$sql="UPDATE `rad_author` SET `ra_pass`='$pass2' WHERE ra_sn='$id'";
	$result3=mysqli_query($link,$sql);
	//header("location: tabs1.php");
}else{
	header("location: get_pass.php");
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>