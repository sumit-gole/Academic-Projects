<html>
	<head>
		<title>Student Regestration Form</title>
		<link href="css.css" type="text/css" rel="stylesheet"/>

		<script>
			function validateForm() 
			{
			var y = document.forms["form"]["fname"].value;	

			if (y == null || y == "") 
			{
				alert("Name must be filled out.");
				return false;
			}
			var ly = document.forms["form"]["lname"].value;	

			if (ly == null || ly == "") 
			{
				alert("Name must be filled out.");
				return false;
			}
			var x = document.forms["form"]["uname"].value;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
			{
				alert("Not a valid e-mail address.");
				return false;
			}
			var p=document.forms["form"]["mobile"].value;
			if(p.length<10 || p.length>10)
			{
				alert("Phone Number must be 10 digit.");
				return false;
			}
			var a = document.forms["form"]["pswd"].value;
			if(a == null || a == "")
			{
				alert("Password must be filled out");
				return false;
			}
			if(a.length<5 || a.length>25)
			{
				alert("Passwords must be 5 to 25 characters long.");
				return false;
			}
			var b = document.forms["form"]["cpswd"].value;
			if (a!=b)
			{
				alert("Passwords must match.");
				return false;
			}
			}
		</script>
	</head>
	<body>
		<?php
			require_once("connection.php");

			if (isset($_POST['register'])) 
			{
				$fname= $_POST['fname'];
				$lname= $_POST['lname'];
				$uname= $_POST['uname'];
				$mobile= $_POST['mobile'];
				$pswd= $_POST['pswd'];
				$cpswd= $_POST['cpswd'];

				if ($fname !="" and $lname !="" and $uname !="" and $pswd !="" and $cpswd !="") 
				{
					$q = "INSERT INTO student_regi(id,fname,lname,uname,mobile,pswd,cpswd)
						VALUES('', '".$fname."', '".$lname."', '".$uname."','".$mobile."', '".$pswd."','".$cpswd."')";

					if(mysqli_query($con,$q))
					{
						//echo "You Are Successfully Registered..";
						header("location:login.php");
					}
					else
					{
						echo $q;
					}					
				}
				else
				{
					echo "Please Fill All the Boxes..";
				}
			}
		?>

		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="HomePage.html"><img src="img/logo.png"/></a>
					<div id="container1" style="margin-left: 80px;margin-top: 50px">
						<div id="container3">
							<img src="img/img.png"  height="0170" width="0170"/>
							<h3 id="heading2"><span>Hey!</span> I am new user</h3>
						</div>
						<div id="container2">
							<h1 id="heading"><b>Regestration</b></h1>
							<form method="post"  name="form" onSubmit="return validateForm()">
								<input type="text" name="fname" class="name" placeholder="First Name"/>
								<input type="text" name="lname" class="name" placeholder="Last Name" /><br>
								<input type="email" name="uname" class="e" placeholder="Email" /><br>
								<input type="text" name="mobile" class="e" placeholder="Mobile Number" /><br>
								<input type="password" name="pswd" class="e" placeholder="Password" /><br>
								<input type="password" name="cpswd" class="e" placeholder="Conform Password" /><br/>
								<input type="submit" name="register" value="Register" class="submit"/>
							</form>
							<p class="change_link">  Already a member ?
								<a href="login.php" class="to_register"> Go and log in </a>
							</p>
						</div>          
					</div>
				</div>
			</div>
		</div>
	</body>
</html>