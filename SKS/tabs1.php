<?php
error_reporting(E_ALL ^ E_NOTICE);
include "sucess_login2.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>後臺管理系統</title>
<style type="text/css">
/**
 * Tabs
 */
.tabs {
	
	display: flex;
	flex-wrap: wrap; /* make sure it wraps*/
}
.tabs label {
	order: 1; /* Put the labels first*/
	display: block;
	padding: 1rem 2rem;
	margin-right: 0.2rem;
	cursor: pointer;
  background: linear-gradient(to left,#00B1B4,#6FFDFF ,#00B1B4 );
  font-weight: bold;
  transition: background ease 0.2s;
}
.tabs .tab {
  order: 99; /* Put the tabs last*/
  flex-grow: 1;
	width: 100%;
	
	display: none;
  padding: 1rem;
  background: #fff;
}
.tabs input[type="radio"] {
	display: none;
}
.tabs input[type="radio"]:checked + label {
	background: #fff;
}
.tabs input[type="radio"]:checked + label + .tab {
	display: block;
}

@media (max-width: 45em) {
  .tabs .tab,
  .tabs label {
    order: initial;
  }
  .tabs label {
    width: 100%;
    margin-right: 0;
    margin-top: 0.2rem;
  }
}

/**
 * Generic Styling
*/
body {
  background: #eee;
  min-height: 100vh;
	box-sizing: border-box;
	padding-top: 10vh;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  font-weight: 300;
  line-height: 1.5;
  max-width: 110rem;
  margin: 0 auto;
  font-size: 112%;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #6FFDFF, #8DC26F);
  background: -moz-linear-gradient(right, #6FFDFF, #8DC26F);
  background: -o-linear-gradient(right, #6FFDFF, #8DC26F);
  background: linear-gradient(to left, #6FFDFF, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; 
}
.headertxt{
	position: absolute;
	top: 20px;
	left: 110px;
	font-size: 32px;
}
.headertxt1{
	position: absolute;
	top: 60px;
	left: 110px;
	font-size: 18px;
}
</style>
</head>

<body>
<div class="headertxt">電台後台管理系統</div>
<div class="headertxt1"><?php echo $_SESSION['m_name']."歡迎使用<br>"?></div>
<div class="tabs">
  <input type="radio" name="tabs" id="tabone" checked="checked">
  <label for="tabone">節目名稱管理系統</label>
  <div class="tab">
    <h1>節目名稱管理系統</h1>
    <iframe src="program1.php" width="100%" height="600" frameborder="0">
	</iframe>
  </div>
  
  <input type="radio" name="tabs" id="tabtwo">
  <label for="tabtwo">主持人管理系統</label>
  <div class="tab">
    <h1>主持人管理系統</h1>
    <iframe src="program2.php" width="100%" height="600" frameborder="0">
	</iframe>
  </div>
  
  <input type="radio" name="tabs" id="tabthree">
  <label for="tabthree">時間表管理系統</label>
  <div class="tab">
    <h1>時間表管理系統</h1>
    <iframe src="program3.php" width="100%" height="600" frameborder="0">
	</iframe>
  </div>
  
    <input type="radio" name="tabs" id="tabfour">
  <label for="tabfour">非線性節目管理系統</label>
  <div class="tab">
    <h1>非線性節目管理系統</h1>
    <iframe src="program4.php" width="100%" height="600" frameborder="0">
	</iframe>
  </div>
<?php if($_SESSION['status']==1){ //只有管理員會出現的選項
?>
	<input type="radio" name="tabs" id="tabfive">
  <label for="tabfive">管理員管理系統</label>
  <div class="tab">
    <h1>管理員管理系統</h1>
    <iframe src="program5.php" width="100%" height="600" frameborder="0">
	</iframe>
  </div>
<?php
 }
?>
</div>
</body>
</html>
