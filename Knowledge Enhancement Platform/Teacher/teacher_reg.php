<html>
<head>
	<title>Teacher Regestration Form</title>
	<link href="css.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<?php
			require_once("connection.php");

			if (isset($_POST['register'])) 
			{
				$fname= $_POST['fname'];
				$lname = $_POST['lname'];
				$email= $_POST['email'];
				$mobile= $_POST['mobile'];
				$designation= $_POST['designation'];
				$subject= $_POST['subject'];
				$experience= $_POST['experience'];
				$pswd= $_POST['pswd'];
				$cpswd= $_POST['cpswd'];

				if ($fname !="" and $lname !="" and $email !="" and $mobile !="" and $designation !="" and $subject !="" and $experience !="" and $pswd !="" and $cpswd !="") 
				{
					$q = "INSERT INTO teacher_regi(id,fname,lname,email,mobile,designation,subject,experience,pswd,cpswd)
						VALUES('', '".$fname."','".$lname."', '".$email."', '".$mobile."','".$designation."','".$subject."', '".$experience."','".$pswd."','".$cpswd."')";

					if(mysqli_query($con,$q))
					{
						echo "You Are Successfully Registered..";
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
				<div id="container11">
					<div id="container3">
					<img src="img.png"  height="0170" width="0170"/>
					<h3 id="heading2"><span>Hey!</span> I am new user</h3>
				</div>
				<div id="container2">
				<h1 id="heading"><b>Registration</b></h1>
				<form method="post">
					<input type="text" name="fname" class="name" placeholder="First name">
					<input type="text" name="lname" class="name" placeholder="Last name"><br>
					<input type="email" name="email" class="e" placeholder="Email"><br>
					<input type="text" name="mobile" class="e" placeholder="Mobile Number"><br>
					<input type="text" name="designation" class="e" placeholder="Designation"><br>
					<input type="text" name="subject" class="e" placeholder="Subject Name"><br>
					<input type="text" name="experience" class="e" placeholder="Experience"><br>
					<input type="password" name="pswd" class="e" placeholder="Password"><br>
					<input type="password" name="cpswd" class="e" placeholder="Conform password"><br/>
					<input type="submit"  name="register" value="Register" class="submit"/>
				</form>
				<p class="change_link">  Already a member ?
					<a href="login.html" class="to_register"> Go and log in </a>
				</p>
			</div>          
		</div>
	</div>
	</div>
</body>
</html>