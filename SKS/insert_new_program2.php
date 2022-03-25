<?php
include "sucess_login2.php";
require "config.php";
$rt_prog=$_POST['select'];
$rt_author=$_SESSION['m_id'];
$id=$_POST['sn'];
$sql =  "UPDATE rad_timetable SET rt_author='$rt_author', rt_oc='1', rt_prog='$rt_prog'  WHERE rt_sn='$id'";
$result=mysqli_query($link,$sql);

if(isset($_POST['checkbox'])){
	if($_POST['checkbox']=='on'){
		$id2=$id+7;
		$sql2 =  "UPDATE rad_timetable SET rt_author='$rt_author', rt_oc='1', rt_prog='$rt_prog', rt_relate='$id', rt_child='1'  WHERE rt_sn='$id2'";
		$result2=mysqli_query($link,$sql2);
		$sql3 =  "UPDATE rad_timetable SET rt_author='$rt_author', rt_oc='1', rt_prog='$rt_prog', rt_relate='$id2'  WHERE rt_sn='$id'";
		$result3=mysqli_query($link,$sql3);
		
	}
	;	
}

?>
<script type="text/javascript">
	parent.$.fancybox.close();
</script>