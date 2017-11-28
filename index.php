<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>今天日期:<?php echo date("Y年m月j日");
mysql_query("SET NAMES 'UTF8'");
?>
<br/>
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
  echo 'HTTP_CLIENT_IP: ' ; 
  echo $ip;
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  echo 'HTTP_X_FORWARDED_FOR: ' ; 
  echo $ip;
}
else
{
  $ip=$_SERVER['REMOTE_ADDR'];
  echo 'REMOTE_ADDR: ' ;
  echo $ip;
}
?>
</body>
</html>
