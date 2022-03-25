<?php
include "sucess_login2.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>

<style type="text/css">
/* Base Styles */
html, body {
  margin: 0;

}

/* Font Styles */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700);

/* tabBox */
#tabBox {
  width: 100%;
  height: auto;
  margin: 0 auto;
  position: relative;
}
.tabWrap {
  float: none;
}

/* Hide Input Radio */
input[type="radio"] {
  display: none;
}

/* Tabs */
.tab {
  width: 100%;
  height: 65px;
  margin: 0 auto;
  background: #4893D2;
  border: none;
  position: relative;
  cursor: pointer;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: block;
}
.tab::before {
  display: none;
}
.tab::after {
  content: '';
  display: none;
}
.tab span {
  color: #FFF;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
  text-align: center;
  line-height: 65px;
  font-size: 14px;
  display: block;
}

.label-01 {
  z-index: 3;
}
.label-02 {
  z-index: 2;
}
.label-03 {
  z-index: 1;
}

/* Display Checked Input */
.tabWrap [id^="tab"]:checked ~ .tabContent {
  display: block;
}
/* Bring Forward Checked Input */
.tabWrap [id^="tab"]:checked + label {
  background: #4388C2;
  z-index: 4;
}

.tabWrap [class^="tab label"]:not(.label-01) {
  margin-left: 0;
}

/* Unchecked Input Hover */
.tabWrap [id^="tab"]:not(:checked) + label:hover {
  background: #4388C2;
  border: none;
}

/* Unchecked Input */
.tabWrap [id^="tab"]:not(:checked) + label::before {
  background: #F0EEE9;
}

/* Checked Input No Shadow*/
.tabWrap [id^="tab"]:checked + label::after {
  display: none;
}

/* tabContent */
.tabContent {
  width: 90%;
  height: auto;
  min-height: 300px;
  margin: 0 auto;
  padding: 5%;
  background: #FFF;
  box-shadow: 0 4px 0 0 rgba(0,0,0,0.015);
  position: absolute;
  /* Multiple .tab Height By Number Of .tab(s) To Get Position Absolute Top */
  top: 195px;
  left: 0;
  display: none;
  z-index: 1;
}
.tabContent h1, p {
  font-family: 'Open Sans', sans-serif;
}
.tabContent h1 {
  margin: 0;
  color: #4893D2;
  font-size: 1.5em;
  text-transform: uppercase;
}
.tabContent p {
  margin: .5em 0;
  color: #222;
}

/* Media Queries */
@media (min-width: 450px) {
  #tabBox {
    width: 400px;
    margin: 25px auto;
  }
  .tabWrap {
    float: left;
  }
  .tab {
    width: 25px;
    height: auto;
    margin: 0;
    background: none;
    border: 50px solid #4CC8C6;
    border-top: none;
    border-right: 15px solid transparent;
    position: relative;
    cursor: pointer;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    display: inline-block;
  }

  .tab span {
    line-height: 50px;
    position: absolute;
    top: 0;
    left: -35px;
  }
  /* Cancel Checked Input Background */
  .tabWrap [id^="tab"]:checked + label {
    background : none;
  }
  /* Unchecked Input Hover */
  .tabWrap [id^="tab"]:not(:checked) + label:hover {
    background: none;
    border: 50px solid #AAAAFF;
    border-top: none;
    border-right: 15px solid transparent;
  }
  .tabWrap [class^="tab label"]:not(.label-01) {
    margin-left: -5px;
  }
  .tabContent {
    width: 350px;
    padding: 25px;
    position: absolute;
    top: 50px;
    left: 0;
	background-color: #B5FBFF;
  }
}
@media (min-width: 550px) {
  #tabBox {
    width: 70%;
  }
  .tabContent {
    width: 100%;
  }
}
  
</style>
</head>

<body>
<div id="tabBox">
  <div class="tabWrap">
    <input id="tab-01" name="tab" type="radio" checked />
    <label class="tab label-01" for="tab-01"><span>時間排程</span></label>
    <!-- tabContent 01 -->
    <article class="tabContent">
    <iframe src="time_table.php" width="100%" height="600" frameborder="0">
	</iframe>
    </article>
  </div>
  <div class="tabWrap">
    <input id="tab-02" name="tab" type="radio" />
    <label class="tab label-02" for="tab-02"><span>日期排程</span></label>
    <!-- tabContent 02 -->
    <article class="tabContent">
    <iframe src="date_table.php" width="100%" height="600" frameborder="0">
	</iframe>
    </article>
  </div>
  <div class="tabWrap">
    <input id="tab-03" name="tab" type="radio" />
    <label class="tab label-03" for="tab-03"><span>月分排程</span></label>
    <!-- tabContent 02 -->
    <article class="tabContent">
    <iframe src="month_scheduling.php" width="100%" height="600" frameborder="0">
	</iframe>
    </article>
  </div>
  <div class="tabWrap">
    <input id="tab-04" name="tab" type="radio" />
    <label class="tab label-04" for="tab-04"><span>全體排程</span></label>
    <!-- tabContent 02 -->
    <article class="tabContent">
    <iframe src="all_table_scheduling.php" width="100%" height="600" frameborder="0">
	</iframe>
    </article>
  </div>

</div>

</body>
</html>