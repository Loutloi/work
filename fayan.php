<html>
<body background="http://image.tianjimedia.com/uploadImages/2013/256/Z30NC8IU5KAN.jpg" >
<?php	
	
	$id=$_COOKIE["name"];
	$chat=$_POST['chatting'];
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="123";		
	$conn= new mysqli($servername,$username,$password,$database_name);
	if($conn->connect_error)
	{
		die("连接失败:".$conn->connect_error);
	}
	$sql="CREATE  TABLE SESSION
		(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			name_ VARCHAR(16) NOT NULL,
			chat VARCHAR(100) NOT NULL,
			reg_date TIMESTAMP
		)";
		$sql="INSERT INTO SESSION(name_,chat)
		VALUES('$id','$chat')";
		?>
		<?php
		if ($conn->query($sql) === TRUE)
		{
			echo"</br><script>alert('发言成功~');</script>";
			echo"<script>location.href='fayan1.html';</script>";
			
		} 
		else 
		{
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();
?>
</body>
</html>
