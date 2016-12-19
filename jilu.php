
<html>
<form  action="delete.php" method="GET">
<body background="http://image.tianjimedia.com/uploadImages/2013/256/Z30NC8IU5KAN.jpg" >
<h1 style="font-size:30px;font-family:youyuan">&nbsp;聊天记录※</h1>
<hr width=100% size=3 color=LightGrey style="border:3 double pink"></hr>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="123";		
	$conn= new mysqli($servername,$username,$password,$database_name);
	if($conn->connect_error)
	{
		die("连接失败:".$conn->connect_error);
	}
	$sql="SELECT * FROM session ORDER BY id DESC";
	mysqli_select_db($conn,"123");
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
	{
		die('NO data!'.mysqli_error($conn));
		
	}
	while($row=mysqli_fetch_array($retval,MYSQL_BOTH))
	{?>
		<p style="text-align:center">
		<?php
			echo"{$row['id']}#&nbsp;&nbsp;&nbsp;&nbsp;".
			"{$row['chat']}</br></br>".
			"@{$row['name_']}&nbsp;&nbsp;".
			"{$row['reg_date']}".
			"</br>";	
			if($row['name_']===$_COOKIE["name"])
			{
				echo '<a href ="/delete.php?id='.$row['id'].'">删除</a>';
			}
			echo"</br>";
			?>
			<hr width=100% size=3 color=LightGrey style="border:3 double pink"></hr></p>
	<?php
	}
	echo"</br><a href='fayan1.html'>返回聊天室</a>";
	?>
	</body>
	</form>
	</html>