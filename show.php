<?php
	$sql = "SELECT * FROM `Logtable`";
	require('conn.php');
	echo "<table width='100%' border='1'>
		<tr>
             <th bgcolor='#CCCCCC' scope='col'>登陆ID</th>
             <th bgcolor='#CCCCCC' scope='col'>方式</th>
             <th bgcolor='#CCCCCC' scope='col'>用户名</th>
             <th bgcolor='#CCCCCC' scope='col'>时间</th>
             <th bgcolor='#CCCCCC' scope='col'>操作用户</th>
         </tr> ";
	while($row = mysql_fetch_row($result)){
		if($row[1]==1){
			$action="新用户注册";
		}
		else{
			$action="老用户登陆";
		}
					echo "<tr>";
					echo "<td align='center' >" . $row[0] . "</td>";
					echo "<td align='center' >" . $action . "</td>";
					echo "<td align='center' >" . $row[2] . "</td>";
					echo "<td align='center' >" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "</tr>";}
	echo "</table>";
	
?>
<?php
	echo "<a href='input.html'><input type='button' value='返回'></input></a>";
?>