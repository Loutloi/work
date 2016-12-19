<html>
<?php
	//登录处理页面	
	 $id=$_POST['id_'];
	$pass=md5($_POST['password_']);
	$servename = "localhost";
	$username = "root";
	$password = "";
	$database_name="123";
	$conn = new mysqli($servename,$username,$password,$database_name);
	if($conn->connect_error)
	{
		$response="错误错误";
	}
	$sql="SELECT * FROM FINAL
		WHERE name_='$id'";
	mysqli_select_db($conn,"123");
	$retval=mysqli_query($conn,$sql);


	if($row=mysqli_fetch_array($retval,MYSQLI_BOTH))	
	{
			if($row['password']==$pass)
			{
				setcookie("name",$id,time()+3600*24*365);
				setcookie("password",$pass,time()+3600*24*365);
				echo"<script>alert('登录成功')</script>";
				echo"<script>location.href='fayan1.html';</script>";
			}
			else 
			{
				echo"<script>alert('用户名或密码不正确')</script>";
				echo"<script>location.href='denglu.html';</script>";
			}
	}
		
	else
	{
		echo"<script>alert('用户名或密码不正确')</script>";
		echo"<script>location.href='denglu.html';</script>";
	}
	$conn->close();
	?>
</html>
