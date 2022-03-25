<?php
include "sucess_login2.php";
require "config.php";
$ra_id=$_POST['ra_id'];
$pass=$_POST['pass'];
$pass1=md5($pass);
$name=$_POST['name'];
$ra_status=$_POST['RadioGroup2'];
$ra_sex=$_POST['RadioGroup1'];
$content=$_POST['TextArea1'];
echo $name."<br>";
echo $ra_status."<br>";
echo $ra_sex."<br>";
echo $content;

$sql = "INSERT INTO rad_author (ra_name, ra_intro, ra_id, ra_pass, ra_status, ra_sex, ra_image) VALUES ('$name', '$content', '$ra_id', '$pass1', '$ra_status', '$ra_sex', 'photoupload.jpg')";//搜索資料指令

if (mysqli_query($link,$sql)) {
	header("location: program5.php");
} else {
    echo "Error: " . $sql . "" . mysqli_error($link);
}

?>