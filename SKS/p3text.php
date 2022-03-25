
<?php
require "config.php";
$i=1;
$j=1;
$d=1;
$time="00:00";
for ($i=1;$i<49;$i++){
	for($j=1;$j<8;$j++){
	$rt_grid=$i."-".$j;

			  
	$sql = "INSERT INTO rad_timetable (rt_grid, rt_time, rt_day) VALUES ('$rt_grid', '$time', '$j')";
	
	if (mysqli_query($link,$sql)) {
               //header("location: program4.php");
			   echo $rt_grid."<br>";
			   echo $time."<br>";
			   echo $j."<br>";
	} 
	}
$time=date('H:i',strtotime("+30 minutes",strtotime($time)));
}

?>
