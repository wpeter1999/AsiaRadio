<?php
include "sucess_login2.php";

$id = $_SESSION['m_id'];
$title=$_POST['textfield'];
require "config.php";
echo $id."<br>";


if(isset($_POST['checkbox'])){
    $public=1;
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id, rp_public) VALUES ('$title', '$id', '$public')";
}else{
    $sql = "INSERT INTO rad_prog (rp_name, rp_user_id) VALUES ('$title', '$id')";
}
if (mysqli_query($link,$sql)) {
               header("location: program1.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
}


?>
