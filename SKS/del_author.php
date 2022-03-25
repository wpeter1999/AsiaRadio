<?php
include "sucess_login2.php";
$id=$_GET['id'];
require "config.php";

$sql = "UPDATE rad_author SET ra_old='1' WHERE ra_sn='$id'"; //搜索資料指令


if (mysqli_query($link,$sql)) {
	header("location: program5.php");
	//echo 1;
} else {
    echo "Error: " . $sql . "" . mysqli_error($link);
}

?>