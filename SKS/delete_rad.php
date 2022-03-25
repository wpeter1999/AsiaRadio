<?php
include "sucess_login2.php";
$rad_sn= $_GET['a'];
//$rp_public=$_POST['rp_public'];
//$title=$_POST['textfield'];
require "config.php";
//echo $title."<br>";
//echo $rp_public;
$sql = "DELETE FROM rad_form WHERE rad_sn='$rad_sn'";
if (mysqli_query($link,$sql)) {
               header("location: program4.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
}
/*
if(isset($_POST['problic'])){
	$rp_public=1;
}else{
	$rp_public=0;
}
if(isset($_POST['checkbox'])){
    $public=1;
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id, rp_public) VALUES ('$title', '$id', '$public')";
}else{
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id) VALUES ('$title', '$id')";
}

*/

?>
