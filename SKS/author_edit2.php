<?php
include "sucess_login2.php";
$id=$_SESSION['m_id'];
require "config.php";
$content=$_POST['TextArea1'];
echo $content;

$sql = "UPDATE rad_author SET ra_intro='$content' WHERE ra_sn='$id'"; //搜索資料指令

if (mysqli_query($link,$sql)) {
	header("location: program2.php");
} else {
    echo "Error: " . $sql . "" . mysqli_error($link);
}

?>