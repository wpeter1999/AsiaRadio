<?php
include"sucess_login2.php";
require "config.php";

$id=$_GET['a'];
	$sql4="SELECT * FROM rad_timetable WHERE rt_relate='$id'";//搜索資料指令
	$result4=mysqli_query($link,$sql4);//執行指令,並把結果存到result
	$number_result4=mysqli_num_rows($result4);//符合條件的查詢結果的筆數
	for($j=0; $j<$number_result4; $j++){
	$arr4[$j]=mysqli_fetch_array($result4);
	}
	if($number_result4>0){

		$sql="UPDATE rad_timetable SET rt_author=NULL, rt_oc='0', rt_prog=NULL, rt_relate=NULL, rt_child='0', rt_add_new='0'  WHERE rt_sn='$id'";
		$result=mysqli_query($link,$sql);
		$id2=$id+7;
		$sql2="UPDATE rad_timetable SET rt_author=NULL, rt_oc='0', rt_prog=NULL, rt_relate=NULL, rt_child='0', rt_add_new='0'  WHERE rt_sn='$id2'";
		$result2=mysqli_query($link,$sql2);
	}else{
		$sql="UPDATE rad_timetable SET rt_author=NULL, rt_oc='0', rt_prog=NULL, rt_relate=NULL, rt_child='0', rt_add_new='0'  WHERE rt_sn='$id'";
		$result=mysqli_query($link,$sql);
	}

?>
<script type="text/javascript">
	parent.$.fancybox.close();
</script>

