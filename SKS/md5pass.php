<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
//$id=$_GET[];
$aa=randomPassword();
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$bb=md5($aa);
/*
$sql = "UPDATE rad_author SET ra_pass='$bb' WHERE ra_sn='$id'"; //搜索資料指令

if (mysqli_query($link,$sql)) {
	header("location: program2.php");
} else {
    echo "Error: " . $sql . "" . mysqli_error($link);
}
*/
?>
</body>
</html>