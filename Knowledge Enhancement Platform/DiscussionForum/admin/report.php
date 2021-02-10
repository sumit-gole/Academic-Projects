<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
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
	<div class="divmenu" id="navbar">
		<ul class="menu">
			<li style="float:right;"><a href="adminlogin.php">Logout</a></li>
		</ul>
	</div>
	<?php
		require_once("connection.php");

		$qry = "SELECT * FROM student_regi";
		$result = mysqli_query($con,$qry);
		//$row = $result->fetch_assoc()
		/*if (mysqli_num_rows($result) > 0) 
		{
			if($row = $result->fetch_assoc()) 
			{
			    $name['uname'] = $row['name'];
			}
		}
		*/
		echo '<div class="container">
						<div class="card" style="margin-top:50px;">
							<div class="card-header">Buyer Report</div>
								<div class="card-body">
									<table class="table"><tr><td>ID</td><td>Name</td><td>Email-Id</td><td>Username</td><td>Phone Number</td><td>Permanent Address</td></tr>';

		while ($row = mysqli_fetch_array($result)) 
		{
			echo 	'
										<tr>
											<td>'.$row['id'].'</td>
											<td>'.$row['fname'].'</td>
											<td>'.$row['lname'].'</td>
											<td>'.$row['uname'].'</td>
											<td>'.$row['mobile'].'</td>
											
										</tr>';
		}
			echo '					</table>
								</div>
						</div>
				</div>';


		$qry = "SELECT * FROM sellerregistration";
		$result = mysqli_query($con,$qry);
		echo '<div class="container">
						<div class="card" style="margin-top:100px;">
							<div class="card-header">Seller Report</div>
								<div class="card-body">
									<table class="table"><tr><td>ID</td><td>Name</td><td>Email-Id</td><td>Username</td><td>Phone Number</td><td>Permanent Address</td></tr>';

		while ($row = mysqli_fetch_array($result)) 
		{
			echo 	'
										<tr class="cols-6">
											<td>'.$row['id'].'</td>
											<td>'.$row['name'].'</td>
											<td>'.$row['email'].'</td>
											<td>'.$row['username'].'</td>
											<td>'.$row['phoneno'].'</td>
											<td>'.$row['permentadd'].'</td>
											
										</tr>';
		}
			echo '					</table>
								</div>
						</div>
				</div>';
	?>
	<div>
		<p></p>
	</div>
</body>
</html>