
<?php
	//注册处理页面
	$id=$_POST['id_'];
	$pass=md5($_POST['password_']);
	if(empty($id)||empty($pass))
	{
		echo "<script>alert('用户名和密码不能为空！')</script>";
		echo"<script>location.href='zhuce.html';</script>";
	}
	else 
	{
		$servename="localhost";
		$username="root";
		$password="";
		$database_name="123";		
		$conn= new mysqli($servename,$username,$password,$database_name);
		if($conn->connect_error)
		{
			die("连接失败:".$conn->conn_error);
		}
		$sql="CREATE TABLE FINAL
		(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			name_ VARCHAR(16) NOT NULL,
			password VARCHAR(32) NOT NULL,
			reg_date TIMESTAMP
		)";
		
		$sql="SELECT * FROM FINAL
		WHERE name_='$id'";
		mysqli_select_db($conn,"123");
		$retval=mysqli_query($conn,$sql);
		if($row=mysqli_fetch_array($retval,MYSQLI_BOTH))	
		{
			if($row['name_']==$id)
			{
				echo"<script>alert('该用户名已被注册')</script>";
				echo"<script>location.href='zhuce.html';</script>";
			}
		}
		else
		{
				$sql="INSERT INTO FINAL(name_,password)
				VALUES('$id','$pass')";
				echo"<script>alert('注册成功！')</script>";
				if($conn->query($sql)===TRUE)
				{
						echo"Sucessfully!";
						echo"<script>location.href='denglu.html';</script>";
				}
				else
				{
					echo"错误:",$conn->error;
					$conn->close();
				}
		}		
		$conn->close();
		}
	?>
	
	
