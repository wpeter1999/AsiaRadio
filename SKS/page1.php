<?php
error_reporting(E_ALL ^ E_NOTICE);
include "sucess_login2.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
echo $_SESSION['m_name']."<br>";
echo $_SESSION['check']."<br>";
?>
<a href="page2.php">you are the one that I want</a>

</body>
</html>