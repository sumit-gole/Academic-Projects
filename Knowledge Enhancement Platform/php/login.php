<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		*{margin:0px;padding: 0px;}
		#main{width: 200px; margin: 20px auto;}
	</style>
</head>
<body>
	<div id="main">

		<?php

			session_start();

			require_once("connection.php");
			if (isset($_POST['login'])) 
			{
				$uname= $_POST['uname'];
				$pswd = $_POST['pswd'];

				$q = 'SELECT * FROM user where uname="'.$uname.'" and pswd="'.$pswd.'" ';
				$r = mysqli_query($con,$q);
				if (mysqli_num_rows($r) > 0) 
				{
					//echo 'You Are Now Login..';
					$_SESSION['uname'] = $uname;
					header("location:/KEF Edu/HomePage.php");
				}
				else
				{
					echo 'Your Password and UserName do not match..!!';
				}
			}


		?>


		<h2 style="text-align: center"> Login </h2><br>
		<form method="post">
			User Name : <input type="text" name="uname" placeholder="User Name" required /><br> <br>
			Password : <input type="password`" name="pswd" placeholder="Password" required /><br> <br>
			<input type="submit" name="login" value="login" />

			<a href="registration.php"> Create an Account </a>
		</form>
	</div>
</body>
</html>