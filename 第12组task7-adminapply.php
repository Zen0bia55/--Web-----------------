<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>社团加入申请（系统管理员）</title>
<link href="innerstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--main start -->
<div id="main">
<!--left panel start -->
<div id="left">
<a href="index.htm"><img src="images/logo1.jpg" alt="Intro type 3" width="247" height="97" border="0" class="logo" /></a>
<p align="center"><img src="20130621031316224_easyicon_net_256.png" width="102" height="108" /></p>
<p align="center">
  <strong>   用户名</strong>：<span class="STYLE4">Admin</span></p>
  <p align="center"><strong>用户权限</strong>：<span class="STYLE4">系统管理员</span></p>
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
<li><a href="adminindex.php" class="hover">主页</a></li>
<li><a href="inner-page.php" class="navLink">更多信息</a></li>
<li><a href="adminapply.php" class="navLink">社团</a></li>
<li><a href="personinfo.php" class="navLink">个人信息</a></li>
<li><a href="inner-page.php" class="navLink">论坛</a></li>
<li><a href="inner-page.php" class="navLink">排行榜</a></li>
<li><a href="inner-page.php" class="navLink">帮助</a></li>
<li class="noImg"><a href="login.html" class="navLink">退出</a></li>
</ul>
<a href="" class="subscribe"></a>
<ul class="link">
<li class="subLink"><a href=" " class="login"></a></li>
<li class="subLink"><a href=" " class="serch"></a></li>
</ul>
<!--rightBotMain start -->
<div id="rightBotMain">
<!--rightBot start -->
<!--rightBot end -->
<br class="spacer" />
<!--best start -->
<div id="best">
<h2><span>社团加入申请</span></h2>
<div class="bestTxt">
<form action="adminapplyhelper.php" method="get">
<div class="contacttext" id="yourname">
    	<div align="left">
        申请人:
        </div>
</div>
<div class="contactformfield" id="username">
	<span id="usernametext">
  		<?PHP
			$db=new MySQLi("localhost","root","123456","web");
			$query="select username,clubname from club where club.join='no'";
			$result=$db->query($query,MYSQLI_STORE_RESULT);
			if($result->num_rows==0)
			{
				$username="无";
				$clubname="无";
				echo "<script language='javascript'>";
            	echo "document.write('无');";
				echo "</script>";	
			}else{
				list($username,$clubname)=$result->fetch_row();
				echo $username;
			}
		?>
        </span>
</div>
<div class="contacttext" >
	<div align="left">
    申请加入社团：
    </div>
</div>
<div class="contactformfield" id="clubname" >
<span id="clubnametext">
	<?PHP
        echo $clubname;
	?>
    </span>
</div>
<div>
    <input type="hidden" name="usernametext"  value="<?PHP echo $username?>" />
    <input type="hidden" name="clubnametext" value="<?PHP echo $clubname?>" />
</div>
<div class="contacttext" align="right">
	<input type="submit" value="同意" />
</div>
<div class="contactformfield" align="left">
	<input type="button" value="拒绝"/>
</div>
</form>
</div>

<p class="bestTxt3"><a href=" "></a></p>
<br class="spacer" />
</div>
<!--best end -->
</div>
<!--rightBotMain end -->
<!--last panel start -->
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
    <p class="design">Designed by : <a href=" /" target="_blank" class="link">865171</a></p>
  </div>
</div>
<!--footerMain end -->
</body>
</html>
