<?php
include "sucess_login2.php";
$rpid= $_GET['a'];
//$rp_public=$_POST['rp_public'];
//$title=$_POST['textfield'];
require "config.php";
echo $rpid;
//echo $title."<br>";
//echo $rp_public;
$sql = "UPDATE rad_prog SET rp_old='1' WHERE rp_sn='$rpid'";
if (mysqli_query($link,$sql)) {
               header("location: program1.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
}

$sql2 = "UPDATE rad_form SET rad_del='1' WHERE rad_main_title='$rpid'";
if (mysqli_query($link,$sql2)) {
               header("location: program1.php");
            } else {
               echo "Error: " . $sql2 . "" . mysqli_error($link);
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
