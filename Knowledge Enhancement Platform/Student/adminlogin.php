<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		.menu
{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}
li
			{
                float: left;
				display: inline;
				margin-right: 50px;
			}
li a
            {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
li a:hover
            {
                background-color: #111;
            }
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php

			session_start();

			require_once("connection.php");
			if (isset($_POST['login'])) 
			{
				$uname= $_POST['uname'];
				$pswd = $_POST['pswd'];

				//$sql = 'SELECT * FROM buyerregistration where username="'.$uname.'" and pswd="'.$pswd.'" ';
				$sql = "SELECT * FROM tbladmin where name= '$uname' and pswd='$pwd'";
				$result = mysqli_query($con, $sql);
				/*if (mysqli_num_rows($result) > 0) 
				{
					 if($row = $result->fetch_assoc()) 
					 {
					       $_SESSION['uname'] = $row['name'];
					  }
										//echo 'You Are Now Login..';
					
					//$_SESSION['fname'] = $r['name'];*/
					header("location:report.php");
				//}
				//else
				//{
				//	echo 'Your Password and UserName do not match..!!';
				//}
			}


		?>
	<form method="post">
		<div class="divmenu" id="navbar">
			<ul class="menu">
				<li style="float:right;"><a href="homepage.html">&#8630; HOME</a></li>
			</ul>
		</div>
		<div>
			<div class="container">
				<div class="card" style="width:650px;margin-left: 200px;margin-top:200px;box-shadow: 5px 5px 5px 5px #888;" align="//center">
					<div class="card-header" align="center">
						Admin Login
					</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="full_name" class="col-md-4 col-form-label text-md-right">Username</label>
							<div class="col-md-6">
								<input type="text" id="full_name" class="form-control" name="uname" placeholder="username" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="email_address" class="col-md-4 col-form-label text-md-right">Password</label>
							<div class="col-md-6">
								<input type="password" id="email_address" class="form-control" name="pswd" placeholder="**********" required>
							</div>
						</div>
						<div class="col-md-6 offset-md-4">
							<input type="submit" value="Login" name="login">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>