<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  $username=$_GET['nametextfield'];
	$password1=$_GET['passwordtextfield1'];
	$password2=$_GET['passwordtextfield2'];
	$sex=$_GET['select'];
	$school=$_GET['select2'];
	$phone=$_GET['phonetextfield'];
	$email=$_GET['emailtextfield'];
	if($password1!=$password2)
	{	
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('两次输入密码不一致!!!');";
		echo "window.location.href='register.html'";
		echo "</script>";
	}else{
		$db=new MySQLi("localhost","root","123456","web");
		$stmt1=$db->prepare("select * from logins where username=?");
		$stmt1->bind_param("s",$username);
		$stmt1->execute();
		$stmt1->store_result();
		if($stmt1->num_rows!=0)
		{
			echo "<script language='javascript' type='text/javascript'>";
		echo "alert('该用户名已被抢注,请重新输入用户名!!!');";
		echo "window.location.href='register.html'";
		echo "</script>";	
		}
		else{
		$stmt=$db->prepare("insert into logins(username,password,sex,email,phone,school) values(?,?,?,?,?,?);");
		$stmt->bind_param('ssssss',$username,$password1,$sex,$email,$phone,$school);
		$stmt->execute();
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('注册成功!!!');";
		echo "window.location.href='login.html';";
		echo "</script>";
		}
	}
?>
</body>
</html>
