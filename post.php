<?php
	$action = $_GET['action'];
	$user = $_GET['user'];
	$UA = $_SERVER['HTTP_USER_AGENT'];
	//$sql->query("UPDATE `Logtable` set Logtable.user=jf_user.name FROM Logtable,jf_user WHERE userID=(select max(userID) from jf_user)");
	$sql="insert into `Logtable`(action,user,time,UA) values('$action','$user',now(),'$UA')";
	require('conn.php');
	if($result){
		echo "操作成功！<p>";
		//echo "<a href='show.php'><input type='button' value='查看表格'></input></a>";
		header("refresh:1;url=show.php");
	}
?>