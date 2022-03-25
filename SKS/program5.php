<?php
error_reporting( E_ALL ^ E_NOTICE );
include "sucess_login2.php";

$id = $_SESSION['m_id'];
require "config.php";
$sql2 = "SELECT * FROM rad_author WHERE ra_sn "; //搜索資料指令
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
<table width="800" height="81" border="0">
  <tbody>
     <tr>
      <th width="331" height="23" bgcolor="#FFFFFF" scope="row"></th>

      <td width="80" align="right" bgcolor="#FFFFFF" colspan="3"><a href="insert_author.php">新增</a></td>
    </tr>
    <tr>
      <th width="331" height="23" bgcolor="#B2CDFF" scope="row">主持人名稱</th>
	  <th width="331" height="23" bgcolor="#B2CDFF" scope="row">身分別</th>
	  <th width="600" height="23" bgcolor="#B2CDFF" scope="row">介紹</th>

      <td width="180" align="right" bgcolor="#B2CDFF">作業</td>
    </tr>
	<?php for($ii = 0; $ii < $number_result2; $ii++ ){
			if($arr2[$ii]['ra_old']==0){
	?> 
    <tr>
      <th height="23" bgcolor="#CDF1FF" scope="row"><?php echo $arr2[$ii]['ra_name']?></th>
	  <?php if ($arr2[$ii]['ra_status']==1){?>
	  <th height="23" bgcolor="#CDF1FF" scope="row">管理員</th>
	  <?php
	  }else{
	  ?>
	  <th height="23" bgcolor="#CDF1FF" scope="row">節目主持人</th>
	  <?php
	  }
	  ?>
	  <th height="23" bgcolor="#CDF1FF" scope="row"><?php echo $arr2[$ii]['ra_intro']?></th>
      <td align="right" bgcolor="#CDF1FF"><a href="edit_author_status.php?a=<?php echo $arr2[$ii]['ra_sn']?>">[編輯]</a><a href="del_author.php?id=<?php echo $arr2[$ii]['ra_sn']?>" onclick="if (confirm('確定要刪除這筆資料嗎??')){return true;}else{event.stopPropagation(); event.preventDefault();};">[刪除]</a></td>
    </tr>
	<?php
		}
	}
	?>
  </tbody>
</table>
</body>
</html>