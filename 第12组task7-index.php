<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页（普通用户）</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE1 {
	color: #CCCCCC;
	font-weight: bold;
}
.STYLE3 {font-size: 12px}
.STYLE4 {color: #99CC00}
-->
</style>
</head>

<body>
<!--main start -->
<div id="main">
<!--left panel start -->
<div id="left">
<a href="adminindex.php"><img src="images/logo1.jpg" alt="Intr type 3" width="247" height="97" border="0" class="logo" /></a>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><img src="images/user.png" width="102" height="108" /></p>
<p align="center">
  <strong>   用户名</strong>：<span class="STYLE4">
  <?PHP
  	$username=$_COOKIE['user'];
	echo "<script language='javascript' >";
	echo "document.write('$username');";
	echo "</script>";
  ?>
  </span></p>
  <p align="center"><strong>用户权限</strong>：<span class="STYLE4">
  	<?PHP
  	$group=$_COOKIE['group'];
	echo "<script language='javascript' >";
	echo "document.write('$group');";
	echo "</script>";
  ?>
  </span></p>
<form name="newsletter" action=" " method="post">
<h2>搜索活动信息</h2>
<input type="text" name="text" value="" />
<input type="submit" name="submit" value="" class="signup" />
</form>
<h2 class="faq"><span><b>留言</b><span class="STYLE3">和</span> <b>建议</b></span></h2>
<p class="lftTxt"><span class="green">点此并留下您宝贵的建议和意见，我们将尽快作出回复</span>DQ：求DOTA校内联赛！！！</p>
<img src="xidianxiaohui(1).jpg" alt="call us" width="209" height="107" />
<ul class="botLink">
<li class="bot"><a href="http://jigsaw.w3.org/css-validator/check/referer" class="css"></a></li>
<li class="bot"><a href="http://validator.w3.org/check?uri=referer" class="xhtml"></a></li> 
</ul>
<br class="spacer" />
</div>
<!--left panel end -->
<!--right panel start -->
<div id="right">
<ul class="nav">
<li><a href="adminindex.php" class="hover">&#20027;&#39029;</a></li>
<li><a href="inner-page.php" class="navLink">最新活动信息</a></li>
<li><a href="apply.html" class="navLink">&#31038;&#22242;</a></li>
<li><a href="personinfo.php" class="hover">个人信息</a></li>
<li><a href="inner-page.php" class="navLink">&#35770;&#22363;</a></li>
<li><a href="inner-page.php" class="navLink">&#25490;&#34892;&#27036;</a></li>
<li><a href="inner-page.php" class="navLink">&#24110;&#21161;</a></li>
<li class="noImg"><a href="login.html" class="navLink">&#36864;&#20986;</a></li>
</ul>
<a href=" " class="subscribe"></a>
<ul class="nav">
<li class="navLink">&#30331;&#38470;<a href=" " class="subLink"></a></li>
<li class="subLink"><a href=" " class="serch"></a></li>
</ul>
<!--rightBotMain start -->
<div id="rightBotMain">
<!--rightBot start -->
<!--rightBot end -->
<br class="spacer" />
<!--best start -->
<div id="best">
<h2><span>光明行志愿者招募</span></h2>
<p class="bestTxt">光明行2012暑期爱心支教志愿者招募书
</p>
<p class="bestTxt2"><a href="inner-page.php"><strong>光明行2012年暑期支教活动</strong>,</a><span class="STYLE1">期待着你的参与！让我们携手，服务基层的教育，光明传承希望，用爱点亮光芒！</span></p>
<p class="bestTxt3"><strong>一．志愿者招募要求</strong></p>
<p class="bestTxt3"><strong>（1</strong><strong>）年满18</strong><strong>周岁，身体素质良好、适应能力强、能吃苦耐劳，品德高尚、思想正派，愿意无偿奉献时间和精力，具有单独承担民事责任能力的成年公民；并征得父母同意。</strong></p>
<p class="bestTxt3"><strong>（2</strong><strong>）具有爱心和强烈的责任心，富有朝气和活力，善于调动课堂气氛，能够激发学生的学习热情，对支教的科目有一定认知，对学生负责；</strong></p>
<p class="bestTxt3"><strong>（3</strong><strong>）具有集体观念，组织纪律性强，性格开朗，善于与人沟通，有一定的人际关系处理能力，并具有相应的团队合作精神和组织协调能力，能服从主办方的工作安排。</strong><a href=" "></a></p>
<p class="pic"></p>
<br class="spacer" />
</div>
<!--best end -->
</div>
<!--rightBotMain end -->
<!--last panel start -->
<div id="last">
<p class="lastTop"></p>
<h2 class="res">普通用户权限</h2>
<ul>
<li><a href="apply.html">申请加入社团</a></li>
<li><a href=" ">管理账户资料</a></li>
<li><a href=" ">查看活动信息</a></li>
<li><a href=" ">给管理员留言</a></li>
<li><a href=" ">查看站内公告</a></li>
<li><a href="personinfo.php">查看个人信息</a></li>
</ul>
<h2 class="future">合作网站</h2>
<h3>校内网站</h3>
<p><a href="http://bbs.xidian.edu.cn/" class="plan">雁塔晨钟BBS</a></p>
<p><a href="http://rs.xidian.edu.cn/" class="plan">西电睿思BT</a></p>
<p><a href="http://www.xdnice.com" class="plan">西电好网</a>
</p>
<h3>学校官方网站</h3>
<a href="http://www.xde6.net/" class="plan">西电新闻网</a><a href="http://jwc.xidian.edu.cn/" class="plan">西电教务处</a>
<h3>网络名站</h3>
<p><a href="http://www.sina.com.cn/" class="plan">新浪</a></p>
<p><a href="http://www.sohu.com/" class="plan">搜狐</a> </p>
<p class="lastBot"></p>
</div>
<!--last panel end -->
<br class="spacer" />
</div>
<!--right panel end -->
<br class="spacer" />
</div>
<!--main end -->
<!--footerMain start -->
<div id="footerMain">
  <div id="footer"> 
    <ul>
      <li><a href=" ">Home</a>|</li>
      <li><a href=" ">About</a>|</li>
      <li><a href=" ">Support</a>|</li>
      <li><a href=" ">Solutions</a>|</li>
      <li><a href=" ">Targets</a>|</li>
      <li><a href=" ">Communication</a>|</li>
      <li><a href=" ">Future</a>|</li>
      <li><a href=" ">login</a></li>
    </ul>
    <p class="copyright">Copyright Intro Type 3 20XX. All Rights Reserved.</p>
    <p class="design">Designed by : <a href=" /" target="_blank" class="link">web 2-12组 </a></p>
  </div>
</div>
<!--footerMain end -->
</body>
</html>
