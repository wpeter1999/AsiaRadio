<?php
include "sussess_login2.php";
$id=$_SESSION['m_id'];
# 檢查檔案是否上傳成功
if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $_FILES['my_file']['name'] . '<br/>';
  echo '檔案類型: ' . $_FILES['my_file']['type'] . '<br/>';
  echo '檔案大小: ' . ($_FILES['my_file']['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $_FILES['my_file']['tmp_name'] . '<br/>';
  # 檢查檔案是否已經存在

 if (file_exists('../images/' . $_FILES['my_file']['name'])){
    echo '檔案已存在。<br/>';
  } else {
    $file = $_FILES['my_file']['tmp_name'];
    //$dest = 'upload/' . $_FILES['my_file']['name'];
	$file2 = $_FILES['my_file']['name'];
	//$sub_file=substr($file2,strlen($file2)-4,4);
	$sub_file=substr($file2, strrpos($file2, '.' ));
	$file3=$id.time().$sub_file;
	$dest = '../images/'.$file3;

    # 將檔案移至指定位置
    move_uploaded_file($file, $dest);
  }
    include "sucess_login2.php";

	$id = $_SESSION['m_id'];
	require "config.php";
	$sql = "UPDATE rad_author SET ra_image='$file3' WHERE ra_sn='$id'"; //搜索資料指令
	$result = mysqli_query( $link, $sql ); //執行指令,並把結果存到result
	$number_result = mysqli_num_rows( $result ); //符合條件的查詢結果的筆數

	/*  查詢結轉成果array             */
	for ( $i = 0; $i < $number_result; $i++ ) {
	  $arr[ $i ] = mysqli_fetch_array( $result );
	}
	if (mysqli_query($link,$sql)) {
               //header("location: program1.php");
			   echo "新檔名稱:".$file3.'<br>';
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
	}

} else {
  echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br/>';
}

?>