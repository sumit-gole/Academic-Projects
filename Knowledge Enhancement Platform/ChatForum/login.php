<html>
	<head>
		<title>Login Form</title>
		<link href="css.css" type="text/css" rel="stylesheet"/>
		<link href="style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>

		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="HomePage.html"><img src="logo.png"/></a>
					<div class="container1">

						<!-- Login PHP CODE for Student LOGIN -->
						<?php
							session_start();
							require_once("connection.php");
							if (isset($_POST['login'])) 
							{
								$uname= $_POST['uname'];
								$pswd = $_POST['pswd'];

								$q = 'SELECT * FROM student_regi where uname="'.$uname.'" and pswd="'.$pswd.'" ';
								$r = mysqli_query($con,$q);
								if (mysqli_num_rows($r) > 0) 
								{
									//echo 'You Are Now Login..';
									$_SESSION['uname'] = $uname;
									header("location:/KEF Edu/ChatForum/ChatForum.php");
								}
								else
								{
									echo 'Your Password and UserName do not match..!!';
								}
							}
						?>
				
						<div id="container3">
							<img src="img.png"  height="0170" width="0170"/>
							<h3 id="heading2"><span>Hey!</span> Login here</h3>
						</div>

						<h1 id="heading">Login</h1>
						<form method="post">
							<input type="text" name="uname" class="e" placeholder="User Name" required /><br>
							<input type="password" name="pswd" class="e" placeholder="Password" required /><br>
							<input type="submit" name="login" value="submit" class="submit"/><br><br>
						</form>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>New Member</b><a href="student_reg.php"> Create an Account </a>
						</div>
					</div>          
				</div>
			 </div>
		</div>
	</div>
</body>
<script type="text/javascript">
 var urlmenu = document.getElementById( 'menu1' );
 urlmenu.onchange = function() {
      window.open(  this.options[ this.selectedIndex ].value );
 };
</script>
</html>