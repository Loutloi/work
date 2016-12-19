<html>
<?php
	setcookie("name","",time()-3600*24*365);
	setcookie("password","",time()-3600*24*365);
	setcookie("del","",time()-3600*24*365);
	echo"<script>location.href='denglu.html';</script>";
?>
</html>