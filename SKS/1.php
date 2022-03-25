<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
	$get=$_GET['a'];
	$arr=array();
	$num=73;
	$num1=$num/10;
	$numm=$num%10;
	$num2=ceil($num);
	$num12=intval($num1);
	for($i = 0; $i < $num; $i++) {
		$arr[$i]="編號-".$i;
	}
	/*
	for($i = 0; $i < 10; $i++) {
		echo $a[$i]."<br>";
	}
	//echo floor($num);
	//echo ceil($num)."<br>";
	
	*/	
	
	$num3=$get*10;
	if($get==$num12){
		$end=$num3+$numm;
	}else{
		$end=$num3+10;
	}
	for ($i=$num3;$i<$end;$i++){
		echo $arr[$i]."<br>";
	}


for($i = 0; $i <$num2; $i++){
	$a=$a."<a href=1.php?a=".$i.">".$i."</a>,&nbsp;";
}
echo substr($a,0,strlen($a)-7);
?>	

</body>
</html>