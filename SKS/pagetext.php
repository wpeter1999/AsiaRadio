<?php
include "sucess_login2.php";
$id=$_SESSION['m_id'];
$author=$_SESSION['m_name'];
require "config.php";
$sql="SELECT * FROM rad_form WHERE rad_author='$author' ORDER by rad_date_broadcast DESC";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}

$sql2="SELECT * FROM rad_prog WHERE rp_user_id='$id' AND rp_old='0'";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}

$per = 10; //每頁顯示項目數量
$pages = ceil($number_result2/$per); //取得不小於值的下一個整數
if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
    $page=1; //則在此設定起始頁數
} else {
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}
$start = ($page-1)*$per; //每一頁開始的資料序號
$result = mysql_query($sql2.' LIMIT '.$start.', '.$per,$link) or die("Error");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<table>
<tr>
    <td style="text-align: center;">編號</td>
    <td style="text-align: center;">姓名</td>
</tr>
<?php
//輸出資料內容
while ($row = mysql_fetch_array ($result))
{
    $id=$row['id'];
    $name=$row['name'];
    ?>
    
    <tr>
        <td style="text-align: center;"><?php echo $id; ?></td>
        <td style="text-align: center;"><?php echo $name; ?></td>
    </tr>

<?php 
    }
?>
</table>

<br />

<?php
    //分頁頁碼
    echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
    echo "<br /><a href=?page=1>首頁</a> ";
    echo "第 ";
    for( $i=1 ; $i<=$pages ; $i++ ) {
        if ( $page-3 < $i && $i < $page+3 ) {
            echo "<a href=?page=".$i.">".$i."</a> ";
        }
    } 
    echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
?>
</body>
</html>