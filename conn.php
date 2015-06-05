<?php
	$db_host = '121.42.26.216';
	$db_user = 'lol';
	$db_pw = 'lol';
	$db_name = 'lol';
	
	$conn=mysql_connect($db_host,$db_user,$db_pw)
		or die('数据库连接失败！');
	
	mysql_query("set names 'utf8'");
	
	mysql_select_db($db_name,$conn) or die("数据库选定失败！");
	
	$result = mysql_query($sql) or die('数据库选定失败');
	
?>