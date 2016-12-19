<html>
<?php
	//删除记录处理		
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="123";		
	$conn= new mysqli($servername,$username,$password,$database_name);
	if($conn->connect_error)
	{
		die("连接失败:".$conn->connect_error);
	}
	$num=$_GET['id']; 
	mysqli_query($conn,"DELETE FROM session WHERE id='$num'");
	echo"删除成功※";
	mysqli_close($conn);	
	echo"<script>location.href='jilu.php';</script>";	
	?>
	</html>
