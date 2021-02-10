<html>
<head>
	<title>Director Regestration Form</title>
	<link href="css.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<?php
			require_once("connection.php");

			if (isset($_POST['register'])) 
			{
				$fname= $_POST['fname'];
				$lname= $_POST['lname'];
				$address= $_POST['address'];
				$city= $_POST['city'];
				$experience= $_POST['experience'];
				$email= $_POST['email'];
				$mobile= $_POST['mobile'];
				$pswd= $_POST['pswd'];
				$cpswd= $_POST['cpswd'];

				if ($fname !="" and $lname !="" and $address !="" and $city !="" and $experience !="" and $email !="" and $mobile !="" and $pswd !="" and $cpswd !="") 
				{
					$q = "INSERT INTO director(id,fname,lname,address,city,experience,email,mobile,pswd,cpswd)
						VALUES('', '".$fname."', '".$lname."', '".$address."','".$city."','".$experience."','".$email."' ,'".$mobile."', '".$pswd."','".$cpswd."')";

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
				<div id="container11">
					<div id="container3">
						<img src="img.png"  height="0170" width="0170"/>
						<h3 id="heading2"><span>Hey!</span> I am new user</h3>
					</div>
					<div id="container2">
						<h1 id="heading"><b>Regestration</b></h1>
						<form method="post">
							<input type="text" name="fname" class="name" placeholder="First name"/>
							<input type="text" name="lname" class="name" placeholder="Last name"/><br>
							<input type="text" name="address" class="e" placeholder="Address" /><br>
							<input type="text" name="city" class="e" placeholder="City" /><br>
							<input type="text" name="experience" class="e" placeholder="Experience"/><br>
							<input type="email" name="email" class="e" placeholder="Email" /><br>
							<input type="text" name="mobile" class="e" placeholder="Mobile Number"/><br>
							<input type="password" name="pswd" class="e" placeholder="Password" /><br>
							<input type="password" name="cpswd" class="e" placeholder="Conform password" /><br/>
							<input type="submit" name="register" value="Register" class="submit"/>
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
