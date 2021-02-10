<html>
<head>
	<title>Instite Regestration Form</title>
	<link href="css.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<?php
			require_once("connection.php");

			if (isset($_POST['register'])) 
			{
				$iname= $_POST['iname'];
				$rno = $_POST['rno'];
				$address= $_POST['address'];
				$city= $_POST['city'];
				$email= $_POST['email'];
				$pswd= $_POST['pswd'];
				$cpswd= $_POST['cpswd'];

				if ($iname !="" and $rno !="" and $address !="" and $city !="" and $email !="" and $pswd !="" and $cpswd !="") 
				{
					$q = "INSERT INTO institute_regi(id,iname,rno,address,city,email,pswd,cpswd)
						VALUES('', '".$iname."', '".$rno."', '".$address."','".$city."', '".$email."','".$pswd."','".$cpswd."')";

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
						<h1 id="heading"><b>Regestration</b></h1>
						<form method="post">
							<input type="text" name="iname" class="e" placeholder="Institute name" /><br>
							<input type="text" name="rno" class="e" placeholder="Register Number" /><br>
							<input type="text" name="address" class="e" placeholder="Address" /><br>
							<input type="text" name="city" class="e" placeholder="City" /><br>
							<input type="email" name="email" class="e" placeholder="Email" /><br>
							<input type="password" name="pswd" class="e" placeholder="Password" /><br>
							<input type="password" name="cpswd" class="e" placeholder="Conform password" /><br/>
							<input type="submit"  name ="register" value="Register" class="submit"/>
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