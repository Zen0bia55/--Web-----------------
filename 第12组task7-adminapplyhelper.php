<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?PHP
  $club=$_GET['clubnametext'];
	$username=$_GET['usernametext'];
	$db=new MySQLi("localhost","root","123456","web");
	$stmt1=$db->prepare("update  club set club.join='yes' where username=? and clubname=?");
	$stmt1->bind_param("ss",$username,$club);
	$stmt1->execute();
	if($stmt1->affected_rows==0)
	{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('update0行.$club.$username');";
		echo "window.location.href='adminapply.php';";
		echo "</script>";	
	}else{
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('已同意该申请');";
		echo "window.location.href='adminapply.php';";
		echo "</script>";
	}
?>
</body>
</html>
