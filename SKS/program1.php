<?php
error_reporting( E_ALL ^ E_NOTICE );
include "sucess_login2.php";

$id = $_SESSION['m_id'];
require "config.php";
$sql2 = "SELECT * FROM rad_prog WHERE rp_user_id='$id' AND rp_old='0'"; //搜索資料指令
$result2 = mysqli_query( $link, $sql2 ); //執行指令,並把結果存到result
$number_result2 = mysqli_num_rows( $result2 ); //符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for ( $ii = 0; $ii < $number_result2; $ii++ ) {
  $arr2[ $ii ] = mysqli_fetch_array( $result2 );
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
/*超連結設定 */
a:link {
 	text-decoration: none;
	color: #0031CD;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: #0031CD;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: #0031CD;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: #0031CD;
}
</style>
</head>

<body>
<table width="600" height="81" border="0">
  <tbody>
     <tr>
      <th width="331" height="23" bgcolor="#FFFFFF" scope="row"></th>
      <td width="78" align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="83" align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="80" align="right" bgcolor="#FFFFFF"><a href="insert_prog.php?a=<?php echo $id ?>">新增</a></td>
    </tr>
    <tr>
      <th width="331" height="23" bgcolor="#B2CDFF" scope="row">主題名稱</th>
      <td width="78" align="right" bgcolor="#B2CDFF">&nbsp;</td>
      <td width="83" align="right" bgcolor="#B2CDFF">&nbsp;</td>
      <td width="80" align="right" bgcolor="#B2CDFF">&nbsp;</td>
    </tr>
	<?php for($ii = 0; $ii < $number_result2; $ii++ ){
	?> 
    <tr>
      <th height="23" bgcolor="#CDF1FF" scope="row"><?php echo $arr2[$ii]['rp_name']?></th>
      <td align="right" bgcolor="#CDF1FF"><a href="edit_prog.php?a=<?php echo $arr2[$ii]['rp_sn']?>">修改</a></td>
      <td align="right" bgcolor="#CDF1FF"><a href="del_prog.php?a=<?php echo $arr2[$ii]['rp_sn']?>" onclick="if (confirm('確定要刪除這筆資料嗎??')){return true;}else{event.stopPropagation(); event.preventDefault();};">刪除</a></td>
      <td align="right" bgcolor="#CDF1FF">&nbsp;</td>
    </tr>
	<?php
	}
	?>
  </tbody>
</table>
</body>
</html>