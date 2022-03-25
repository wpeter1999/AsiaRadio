<?php
include "sucess_login2.php";

$id_input=$_POST['id_input'];
$pass_input1=$_POST['pass_input'];
$pass_input=md5($pass_input1);
$newpass1=$_POST['newpass1'];
$newpass2=$_POST['newpass2'];
$newpass3=md5($newpass1);
$id=$_SESSION['m_id'];
require "config.php";

if ($pass_input==$newpass1){
	header("location: loginedit.php?no=新舊密碼相同");
}
if($newpass1!=$newpass2){
	header("location: loginedit.php?no=兩次密碼不一致");
}
/*
echo $id_input."<br>";
echo $pass_input."<br>";
echo $newpass1."<br>";
echo $newpass2."<br>";
echo $id;
*/
//mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_author WHERE ra_id='$id_input' AND ra_pass='$pass_input'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

if($number_result==0){
	header("location: loginedit.php?no=帳號或密碼錯誤");
}else{
	$sql2 = "UPDATE rad_author SET ra_pass='$newpass3' WHERE ra_sn='$id'";
	if (mysqli_query($link,$sql2)) {
       //header("location: program1.php");
	   echo "修改成功";
    } else {
       echo "Error: " . $sql2 . "" . mysqli_error($link);
	}
}
?>
