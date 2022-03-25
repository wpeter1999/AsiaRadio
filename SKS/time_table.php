<?php
include "sucess_login2.php";
$id = $_SESSION[ 'm_id' ];
$author = $_SESSION[ 'm_name' ];
$time = "00:00";
require "config.php";
$sql = "SELECT * FROM rad_timetable"; //搜索資料指令
$result = mysqli_query( $link, $sql ); //執行指令,並把結果存到result
$number_result = mysqli_num_rows( $result ); //符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for ( $i = 0; $i < $number_result; $i++ ) {
  $arr[ $i ] = mysqli_fetch_array( $result );
}
$num = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- fancy box !-->
<meta http-equiv="Content-Type" content="text/html" />
<meta http-equiv="imagetoolbar" content="no" />
<!-- fancy box !-->
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>時間/日期</title>

<!-- fancy box !--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script> 
<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="../style.css" />
<script type="text/javascript">
		$(document).ready(function() {
						/*
			*   Examples - various
			*/

			$(".various3").fancybox({
				'width'				: '85%',
				'height'			: '80%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				'onClosed'			:function(){window.location.reload();}
			});
		});
	</script> 
<!-- fancy box !-->
<style type="text/css">
.style1 {
    background-color: #DBFFFF;
}
.style2 {
    background-color: #00C8C8;
}
.style3 {
    background-color: #FFFFB7;
}
body {
    font-family: Microsoft JhengHei;
    font-size: 16px;
}
.style4 {
    border: 0 solid #FFFFFF;
    background-color: #B5FBFF;
}
</style>
</head>

<body>
<table style="width: 100%" class="style4">
  <tr>
    <td style="width: 150px" class="style2">時間/日期</td>
    <td class="style2">週一</td>
    <td class="style2">週二</td>
    <td class="style2">週三</td>
    <td class="style2">週四</td>
    <td class="style2">週五</td>
    <td class="style2">週六</td>
    <td class="style2">週日</td>
  </tr>
  <?php for($i=0;$i<48;$i++){?>
  <tr>
    <td style="width: 150px" class="style3"><?php echo $time ?></td>
    <?php
    for ( $ii = 0; $ii < 7; $ii++ ) {
      if ( $arr[ $num ][ 'rt_oc' ] == "1" ) {
        $oc = "已滿";
        $color = "#FF5F5F";
        $color2 = "#FFFF5F";
        if ( $arr[ $num ][ 'rt_child' ] == 1 ) {
          if ( $arr[ $num ][ 'rt_author' ] == $id ) {
            ?>
    <td bgcolor="<?php echo $color2 ?>"><?php echo $oc ?></td>
    <?php
    } else {
      ?>
    <td bgcolor="<?php echo $color ?>"><?php echo $oc ?></td>
    <?php
    }
    } else {
      if ( $arr[ $num ][ 'rt_author' ] == $id ) {
        ?>
    <td bgcolor="<?php echo $color2 ?>"><a class="various3" href="edit_timetable.php?a=<?php echo $arr[$num]['rt_sn'] ?>"><?php echo $oc ?></a></td>
    <?php }else{?>
    <td bgcolor="<?php echo $color ?>"><a class="various3" href="edit_timetable.php?a=<?php echo $arr[$num]['rt_sn'] ?>"><?php echo $oc ?></a></td>
    <?php
    }
    }
    ?>
    <?php
    } else {
      $oc = "空檔";
      $color = "#F2FFFF";
      ?>
    <td bgcolor="<?php echo $color ?>"><a class="various3" href="insert_new_program.php?a=<?php echo $arr[$num]['rt_sn'] ?>"><?php echo $oc ?></a></td>
    <?php
    }
    ?>
    <?php
    $num++;
    }
    ?>
  </tr>
  <?php
  $time = date( 'H:i', strtotime( "+30 minutes", strtotime( $time ) ) );
  }
  ?>
</table>
</body>
</html>
