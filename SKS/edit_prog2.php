<?php
include "sucess_login2.php";
$rpid= $_POST['rpid'];
//$rp_public=$_POST['rp_public'];
$title=$_POST['textfield'];
require "config.php";
//echo $rpid."<br>";
//echo $title."<br>";
//echo $rp_public;
if(isset($_POST['problic'])){
	$rp_public=1;
}else{
	$rp_public=0;
}
//echo $rp_public;
$sql = "UPDATE rad_prog SET rp_name='$title',rp_public='$rp_public' WHERE rp_sn='$rpid'";
if (mysqli_query($link,$sql)) {
               header("location: program1.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
}
/*
if(isset($_POST['checkbox'])){
    $public=1;
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id, rp_public) VALUES ('$title', '$id', '$public')";
}else{
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id) VALUES ('$title', '$id')";
}

*/

?>
