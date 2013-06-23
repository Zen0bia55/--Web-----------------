<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无</title>
</head>

<body>
<?php
  $username=$_GET["nametextfield"];
	$password=$_GET["passwordtextfield"];
	$db=new MySQLi("localhost","root","123456","web");
	$stmt=$db->prepare("select username,password from logins where username=? and password=?");
	$stmt->bind_param('ss',$username,$password);
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
		setcookie('user',$username);
		$db->close();
		if($username=="admin"){//系统管理员
			setcookie('group','系统管理员');
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('欢迎，$username !!!');";
			echo "window.location.href='adminindex.php';";
			echo "</script>";
			}
			else{//普通用户
				setcookie('group','普通用户');
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('欢迎，$username !!!');";
				echo "window.location.href='index.php';";
				echo "</script>";
			}
		}
?>
</body>
</html>
