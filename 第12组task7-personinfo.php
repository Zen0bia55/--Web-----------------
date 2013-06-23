<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>高校社团信息发布平台-个人信息</title>
<link href="innerstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style4 {color: FF0000}
-->
</style>
</head>
//<!--main start -->
  <div id="main">
//<!--left panel start -->
		<div id="left">
			<a href="index.htm"><img src="images/logo1.jpg" alt="高校社团信息发布平台" width="247" height="97" border="0" class="logo" /></a>
        <br class="spacer" />
		</div>
        <!--right panel start -->
<div id="right">
<ul class="nav">
<li><a href="index.htm" class="hover">&#20027;&#39029;</a></li>
<li><a href="inner-page.php" class="navLink">最新活动信息</a></li>
<li><a href="apply.html" class="navLink">&#31038;&#22242;</a></li>
<li><a href="personinfo.php" class="navLink">&#20010;&#20154;&#20449;&#24687;</a></li>
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
	<h2><span>个人信息 </span></h2>
	<p class="bestTxt">以下是您的个人账户具体信息
	</p>
	<form action="register.php" method="get">
		<div class="contacttext" id="yourname">
  			<div align="left">&#29992;&#25143;&#21517;: 
        	</div>
		</div>
		<div class="contactformfield" id="nametextbox7">
  			<div align="left">
   			<?php
				$username=$_COOKIE['user'];
				/*$db=new MySQLi("localhost","root","123456","web");
				
				$stmt=$db->prepare("select sex,email,phone,shcool from logins where username=?");
				$stmt->bind_param('s',$username);
				$stmt->bind_result($sex,$email,$phone,$school);
				$stmt->execute();
				$stmt->store_result();
				if($stmt->num_rows==0)
				{
					echo "<script language='javascript' type='text/javascript'>";
					echo "alert('用户名或密码不正确！！！');";
					echo "window.location.href='login.html';";
					echo "</script>";
				}
				else{
						$stmt->fetch();
					}*/
				$db=new MySQLi("localhost","root","123456","web");
				$query='select sex,email,phone,school from logins where username="'.$username.'"';
				$result=$db->query($query,MYSQLI_STORE_RESULT);
				list($sex,$email,$phone,$school)=$result->fetch_row();
				echo "<script language='javascript'>";
            	echo "document.write('$username');";
				echo "</script>";
			?>
        	</div>
		</div>
		
		<div class="contacttext" id="subject">
  			<div align="left">性别:</div>
		</div>
		<div class="contactformfield" id="nametextbox4">
  			<div align="left">
   			<?php
				
					echo "<script language='javascript'>";
            		echo "document.write('$sex');";
					echo "</script>";
			?>
      	  </div>
		</div>
		<div class="contacttext" id="phone">邮箱: </div>
		<div class="contactformfield" id="nametextbox3">
  			<div align="left">
   			<?php
				echo "<script language='javascript'>";
            	echo "document.write('$email');";
				echo "</script>";
			?>
       		 </div>
		</div>
		<div class="contacttext" id="cell">电话号码: </div>
		<div class="contactformfield" id="nametextbox2">
  			<div align="left">
   			<?php
				echo "<script language='javascript'>";
            	echo "document.write('$phone');";
				echo "</script>";
			?>
       	 	</div>
		</div>
		<div class="contacttext" id="contactvia">学院: </div>
		<div class="contactformfield" id="textbox1">
  			<div align="left">
   			<?php
				echo "<script language='javascript'>";
            	echo "document.write('$school');";
				echo "</script>";
			?>
        	</div>
		</div>

	</form>
 </div>
 </div>
<!--<div class="contacttext" id="emptytext"></div>-->
<!--<div class="contactformfield" id="submittext">
  <p align="left" class="bestTxt4" onclick=""><a href=""></a></p>
</div>-->
<br class="spacer" />
</div>
<!--best end -->

<!--rightBotMain end -->
<!--last panel start -->
<!--last panel end -->
<br class="spacer" />
<!--right panel end -->
<br class="spacer" />
</div>
<!--main end -->
<!--footerMain start -->
<div id="footerMain">
  <div id="footer"> 
    <ul>
      <li><a href="">Home</a>|</li>
      <li><a href="">About</a>|</li>
      <li><a href="">Support</a>|</li>
      <li><a href="">Solutions</a>|</li>
      <li><a href="">Targets</a>|</li>
      <li><a href="">Communication</a>|</li>
      <li><a href="">Future</a>|</li>
      <li><a href="">Contact</a></li>
    </ul>
    <p class="copyright">Copyright Intro Type 3 20XX. All Rights Reserved.</p>
    <p class="design">Designed by : <a href="/" target="_blank" class="link">865171</a></p>
  </div>
</div>
<!--footerMain end -->
</html>
