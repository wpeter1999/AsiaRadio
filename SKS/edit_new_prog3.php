<?php
include"success_login2.php";
require "config.php";
$rt_prog=$_POST['select'];
$rt_author=$_SESSION['m_id'];
$id=$_POST['sn'];

$sql="UPDATE rad_timetable1 SET rt_prog='$rt_prog' WHERE rt_sn='$id'";
$result=mysqli_query($link,$sql);

if(isset($_POST['checkbox'])){
	if($_POST['checkbox']=='on'){
		$id2=$id+7;
		$sql2="UPDATE rad_timetable1 SET rt_author='$rt_author', rt_oc='1', rt_prog='$rt_prog', rt_relate='$id',rt_child='1' WHERE rt_sn=$id2";
		$result2=mysqli_query($link,$sql2);
		$sql3="UPDATE rad_timetable1 SET rt_author='$rt_author', rt_oc='1', rt_prog='$rt_prog', rt_relate='$id2' WHERE rt_sn=$id";
		$result3=mysqli_query($link,$sql3);
	}
	;
}else{
	$sql4="SELECT * FROM rad_timetable1 WHERE rt_relate='$id'";//搜索資料指令
	$result4=mysqli_query($link,$sql4);//執行指令,並把結果存到result
	$number_result4=mysqli_num_rows($result4);//符合條件的查詢結果的筆數
	for($j=0; $j<$number_result4; $j++){
	$arr4[$j]=mysqli_fetch_array($result4);
	}
	if($number_result4>0){
		$id3=$arr4[0]['rt_sn'];
		$sql5="UPDATE rad_timetable1 SET rt_author='', rt_oc='0', rt_prog='', rt_relate='',rt_child='0' WHERE rt_sn=$id3";
		$result5=mysqli_query($link,$sql5);
		$sql="UPDATE rad_timetable1 SET rt_prog='$rt_prog' WHERE rt_sn='$id'";
		$result=mysqli_query($link,$sql);
	}else{
		$sql="UPDATE rad_timetable1 SET rt_prog='$rt_prog' WHERE rt_sn='$id'";
		$result=mysqli_query($link,$sql);
	}
}
?>
<script type="text/javascript">
	parent.$.fancybox.close();
</script>