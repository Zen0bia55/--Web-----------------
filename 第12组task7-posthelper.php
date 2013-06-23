<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?PHP
  $title=$_GET['titletextfield'];
	$text=$_GET['text'];
	$db=new MySQLi("localhost","root","123456","web");
	$stmt1=$db->prepare("delete from activity");
	$stmt1->execute();
	$stmt=$db->prepare("insert into activity(title,text) values(?,?);");
		$stmt->bind_param('ss',$title,$text);
		$stmt->execute();
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('发布成功!!!');";
		echo "window.location.href='post.html';";
		echo "</script>";
?>
</body>
</html>
