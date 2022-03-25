<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- fancy box !-->
<meta http-equiv="Content-Type" content="text/html" />
<meta http-equiv="imagetoolbar" content="no" />
<!-- fancy box !-->
<!--search button!-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--search button!-->
<title>亞大電台</title>
<!-- fancy box !-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
						/*
			*   Examples - various
			*/

			$(".various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
		});
	</script>
<!-- fancy box !-->
<style type="text/css">
/*超連結設定 */
a:link {
 	text-decoration: none;
	color: white;
}

/* visited link */
a:visited {
 	text-decoration: none;
	color: white;
}

/* mouse over link */
a:hover {
  	text-decoration: underline;
	color: white;
}

/* selected link */
a:active {
  	text-decoration: none;
	color: white;
}
/* image border */
.img-frame-cap {
        width: 110px;
		height: 130px;
        background:rgba(150,150,150,0.3);
        padding: 2px 2px 2px 2px;
		border-radius: 5px;
        
      }
.caption {
        text-align: center;
        margin-top: 4px;
		color: 	white;
	    font-family: Microsoft JhengHei;
	    font-size: 16px;
 }
 .captionText {
	 	float:left;
        text-align: center;
        margin-top: -130px;
		margin-left: 140px;
       color: 	white;
	    font-family: Microsoft JhengHei;
	    font-size: 16px;
		text-align:left;
 }
 div.imageborder {
        border-radius: 999em;
        width: 80px;
        height: 80px;
        padding: 5px;
        line-height: 0;
        border: 10px solid #000;
        background-color: #eee;
		
      }
div.imageborder>img {
        border-radius: 999em;
        height: 100%;
        width: 100%;
        margin: 0;
		
      }
<style type="text/css">
/* 對其LAYOUT */
.container{
	height: 1080px;
	width:1920px;	
	top:0px;
	left: 0px;
	right: 0px;
	margin: auto;
}
.header{
	position: absolute;
	height: 150px;
	width:1920px;
	background-image:url("images/layout_01.png");
	top:0px;
	/*to center*/
	left:0;
	right:0;
	margin: auto;
}
.headerRadio{
	position: absolute;
	top:20px;
	left:755px;
}
.headergif{
	position: absolute;
	left: 1300px;
	width: 320px;
	height: 150px;
	background-image: url("images/Audio.gif");
}
.headerSearchbutton{
	position: absolute;
	left: 1620px;
	top: 50px;
}

.logo{
	position: absolute;
    height: 90px;
	width:90px;
	top:10px;
	left:15px;
	
	margin: auto;
}

.content{
	position: absolute;	
	height: 856px;
	width:1920px;
	background-color: antiquewhite;
	top:150px;
	left:0;
	right:0;
	margin: auto;
}
.left{
	position: absolute;	
    height: 856px;
	width:648px;
	background-image: url("images/layout_02.png");
	left:0px;
	top:0px;
	
}
.leftheader{
	position: absolute;
	left: 200px;
	top:72px;
	width: 243px;
	height: 39px;
	background-image: ;
}
.leftheader1{
	position: absolute;
	left: 35px;
	top:5px;
	width: 243px;
	height: 39px;
	padding-left:50px; 
	padding-top:5px;
	font-family: Microsoft JhengHei;
	font-size: 24px;
	/*color: white;*/
}
.leftText{
	position: absolute;
	font-size: 18px;
	left:90px;
	top: 120px;
	width: 465px;
	height: 650px;
	/*background-color: aqua;*/
	overflow-x:auto;
}

.leftText1{
	font-size: 24px;
	padding-left:40px; 
	padding-top:20px;
	color: 	white;
	line-height:30px; 
	font-family: Microsoft JhengHei;
	
}
.center{
	position: absolute;	
    height: 856px;
	width:627px;
	background-image: url("images/layout_03.png");
	left:648px;
	right:0;
	top:0px;
	
}
.centerheader{
	position: absolute;
	left: 85px;
	top:82px;
	width: 460px;
	height: 39px;
	/*background-color: aqua;*/
	text-align: center;
	font-family: Microsoft JhengHei;
	font-size: 24px;
}

.centerauthor{
	position: absolute;
	top: 60px;
	height: 650px;
	width:614px;
	padding-left: 30px;
	left:0;
	right:0;
	overflow: auto;
	margin: auto;
}

.title{
        color: #FFD866;
	    font-family: Microsoft JhengHei;
	    font-size: 16px;
}
.right{
	position: absolute;	
    height: 856px;
	width:645px;
	background-image: url("images/layout_04.png");
	right:0px;
	top:0px;
	
}
.rightheader{
	position: absolute;
	left: 200px;
	top:90px;
	width: 243px;
	height: 39px;
	background-image:;
}
.rightheader1{
	position: absolute;
	left: 0px;
	top:-6px;
	width: 243px;
	height: 39px;
	padding-left:82px; 
	padding-top:0px;
	
	font-family: Microsoft JhengHei;
	font-size: 24px;

}
.rightText{
	position: absolute;
	top:50px;
	height: 650px;
	width:450px;
	left:-100px;
	right:0;
	overflow: auto;
	margin: auto;
	font-size: 14px;
	padding-left:0px; 
	color: 	#000079;
	font-family: Microsoft JhengHei;
}
.footer{
	position: absolute;	
    height:74px;
	width:1920px;
	background-image: url("images/layout_05.png");
	top:1006px;
	left:0;
	right:0;
	margin: auto;
}

/* search button */

form.example input[type=text] {
	box-sizing: border-box;
	padding: 10px;
	font-size: 15px;
	border: 1px solid grey;
	float: left;
	width: 80%;
	background: #f1f1f1;
}

form.example button {

  float: left;
  width: 20%;
  padding: 10px;
  background: #000079;
  color: white;
  font-size: 15px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0000C6;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
/* search button */

</style>
</head>

<body>
<?php
require "config.php";//include a php file - config.php
mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
$sql="SELECT * FROM rad_prog WHERE rp_old='0'";//搜索資料指令
$result=mysqli_query($link,$sql);//執行指令,並把結果存到result
$number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($i=0; $i<$number_result; $i++){
$arr[$i]=mysqli_fetch_array($result);
}

/*-- 讀取主持人資料             --*/


$sql2="SELECT * FROM rad_author ORDER BY 'ra_sn' ASC";//搜索資料指令
$result2=mysqli_query($link,$sql2);//執行指令,並把結果存到result
$number_result2=mysqli_num_rows($result2);//符合條件的查詢結果的筆數

/*  查詢結轉成果array             */
for($ii=0; $ii<$number_result2; $ii++){
$arr2[$ii]=mysqli_fetch_array($result2);
}
?>	

<div class="container">
	<!--header start -->
	<div class="header">
		<div class="logo"><img src="images/logo.png" width="130" height="130" alt=""/></div>
		<div class="headerRadio">
			<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
			<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
			<script type="text/javascript">
			MRP.insert({
			'url':'http://210.70.80.96:8000/stream',
			'codec':'mp3',
			'volume':100,
			'autoplay':false,
			'buffering':1,
			'title':'亞大電台',
			'bgcolor':'#FFFFFF',
			'skin':'pinhead',
			'width':421,
			'height':120
			});
			</script>
			<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
		</div>
		<!--div class="headergif"></div>-->
		<div class="headerSearchbutton">
            <!-- search button !-->
            <form class="example" action="search_page.php" style="margin:auto;max-width:300px" method="POST">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search " ></i></button>
            </form>
            <!-- search button !-->			
        </div>
	</div>
	<!--header end -->
	<div class="content">
	<!--left start -->
		<div class="left">
			<div class="leftheader">
				<div class="leftheader1"><b>主題探討</b></div>
			</div>
			<div class="leftText">
				<div class="leftText1">
				<?php
					for($i=0; $i<$number_result; $i++){
				?>
					<!--用FOR迴圈印主題名稱-->
					<li><?php echo "<a class='various3' href='list_prog.php?a=".$arr[$i]['rp_sn']."'>".$arr[$i]['rp_name']."</a><br>";?></li>
				<?php
				}
				?>
				</div>
				<br>
				<br>
				<p style="text-align: right; color: white; font-size: 20px; font-family: Microsoft JhengHei;">
					....................<a class="various3" href="old_list_prog.php">舊節目</a>
				</p>
			</div>
		</div>
		<!--left end -->

		<!--center start-->
		<div class="center">
			<div class="centerheader">
					<div class="centerheader1"><b>主持人</b></div>
					
					<div class="centerauthor"> 					
					 <?php 
					for($ii=0; $ii<$number_result2; $ii++){
							/* seach array 找出主持人的節目    */
							$j=0;
							foreach ($arr as $key=>$row) {	
								if($row['rp_user_id']==$arr2[$ii]['ra_sn']){
								   //$rp_user_id[$j]=$row['rp_user_id'];
								   $rad_name[$j]=$row['rp_name'];
								   $rad_id[$j]=$row['rp_sn'];
								   $j++;
								}
							}
							/* seach array 找出主持人的節目    */
					?>
					<!---  主持人 Start   --->
					<!--讓頭像變成圓形--> 
					<div class="img-frame-cap">
							<div class="imageborder">
								<img src="images/<?php echo $arr2[$ii]['ra_image']?>" height="350" width="350" alt="<?php echo $arr2[$ii]['ra_name']?>"/>
							</div>
							<div class="caption"><a class="various3" href="progAuthor.php?b=<?php echo $arr2[$ii]['ra_name']?>&c=<?php echo $arr2[$ii]['ra_sn']?>">主持人:<?php echo $arr2[$ii]['ra_name']?></a></div>
					</div>
					<!--讓頭像變成圓形-->
					<div class="captionText"><p class="title">簡介:</p><?php echo $arr2[$ii]['ra_intro']?>
						<br><p class="title">主持的節目:</p>
					 <?php
							/* 呈現出主持人的節目項目 */
						for($i=0; $i<$j; $i++){
							echo "&nbsp;&nbsp;&nbsp;<a class='various3' href='list_prog.php?a=".$rad_id[$i]."'>".$rad_name[$i]."</a>";
							echo "<br>";
						}
						/* 呈現出主持人的節目項目    */
					 ?>
					 </div>  

					<!---  主持人End   ---> 
					<br> 
					<?php 
					}
					?>
					</div>
			</div>
		</div>
		<!--center end-->

		<!--right start -->
		<div class="right">
            <div class="rightheader">
                <div class="rightheader1"><b>時間表</b></div>
                <div class="rightText">
                    <ul>
                        <!--<li><a class="various3" href="HTMLTEST.html">AAA</a></li>-->
                        <!--<li><a class="various3" href="HTMLTEST.html">Iframe</a></li>-->
                        <?php
                        $today=date("Y-m-d"); //今天日期
                        $day7=date("Y-m-d", strtotime("$today +6 day")); //七天後日期
                        //echo $day6."<br>";
                        //echo $today."<br>";
                        require "config.php";
                        mysqli_query($link, "SET CHARACTER SET UTF8");//解決亂碼
                        $sql="SELECT * FROM rad_day WHERE rad_date_broadcast>='$today' AND rad_date_broadcast <= '$day7'";//搜索資料指令,把日期限制在一星期內
                        $result=mysqli_query($link,$sql);//執行指令,並把結果存到result
                        $number_result=mysqli_num_rows($result);//符合條件的查詢結果的筆數

                        /*  查詢結轉成果array             */
                        for($i=0; $i<$number_result; $i++){
                        $arr[$i]=mysqli_fetch_array($result);
                        }
                        /*  查詢結轉成果array             */

                        for($j=0; $j<$number_result;$j++){

                        ?>
						<!--印日期-->
                        <p class="title">
                        <?php echo $arr[$j]['rad_date_broadcast']."<br>";
                            ?></p>
						<!--印標題跟時間-->
                        <p style="color: white">
						<?php
                            echo "<a class='various3' href='list_prog.php?a=".$arr[$j]['rad_main_title']."'>".$arr[$j]['rad_main_title']."</a>";
                            echo "<br>&nbsp;&nbsp;"."<a  class='various3' href='list_all.php?a=".$arr[$j]['rad_sn']."'>".$arr[$j]['rad_title']."</a>";
                            echo "<br>&nbsp;&nbsp;-".$arr[$j]['rad_time_broadcast']."<br>";
                        }
                        ?></p>
                    </ul>
                </div>
            </div>
		</div>
		<!--right end -->
	</div>
	<!--footer start -->
	<div class="footer">
	<!--擁有者資訊-->
	<p style="text-align: center; color: black; padding-top: 30px; font-size: 18px; font-family: Microsoft JhengHei; " >擁有者:@亞洲大學資訊傳播系 系統維護:彭依允</p>
	</div>
	<!--footer end -->
</div>
</body>
</html>
