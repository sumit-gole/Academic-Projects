<!DOCTYPE html>
<html>
		<head>
			<title> Dashboard </title>

			<!-- ***********  BOOTSTRAP FOR SOCIAL ICONS  ************* -->
			<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>	
		  <!--   Header Section Start -->
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding" style="margin-top: 10px; margin-left: -160px;">
			  				<ul>
								<a href="https://www.facebook.com/DYPIMCAM/"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://twitter.com/mcambaplacement"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://www.instagram.com/iam.sumiit/?hl=en"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://in.linkedin.com/in/dypimca-mba-88aa62148"><i class="fa fa-linkedin"></i></a>
			  				</ul>			
			  			</div>

			  			<!-----   Welcome USER NAME Session Start  -->
			  			<div>
			  				<h5 style="text-align: center; color: white; margin-top: 10px; margin-left: -20px;">
							<?php
								session_start();
								if(isset($_SESSION['uname']))
								{
									echo ' Welcome &nbsp;&nbsp;&nbsp;'.'<a href="#" style="color:red;">'.$_SESSION['uname'].'</a> &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;';
									echo' <a href="ChatForum.php"><i class="fa fa-comment" style="margin-left:380px;"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
									echo' <a href="#"><i class="fa fa-bell"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
								}
								else
								{
									header("location:login.php");
								}
							?></h5>
						</div>
			  		</div>	
	  			</div>
			</div>	
		 	<!--   Header Section End -->

		  	<!--   Menu Bar Section Start -->
		    <div class="container main-menu">

		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="Dashboard.php"><img src="img/logo.png"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="Dashboard.php">Home</a></li>
			          <li><a href="About.php">About</a></li>
			          <li><a href="#"> Chat Forum </a>
			          	<ul>
			          		<li><a href="/KEF Edu/ChatForum/ChatForum.php">Chat Room</a></li>
			          		<li><a href="#"> Q&A Discussion Forum</a></li>
			          	</ul>
			          </li>
			          <li><a href="#">Curriculum </a>
			            <ul>
			              <li><a href="#">Assignments</a></li>
			              <li><a href="#">Exams</a></li>
			              <li><a href="#">Quiz</a></li>
			            </ul>
			          </li>
			          <li><a href="Events.html">Events</a></li>
			          <li><a href="Gallery.php">Gallery</a></li>        					          		          
			          <li><a href="FeedBack.php">FeedBack </a></li>
			          <li style="margin-top: -50px; margin-right: -100px;"><a href="#">Profile </a>
			            <ul>
			              <li><a href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			              <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;PROFILE</a></li>
			              <li><a href="#"><i class="fa fa-gear fa-book"></i>&nbsp;&nbsp;STUDY MATERIALS</a></li>
			              <li><a href="#"><i class="fa fa-gear fa-list-alt"></i>&nbsp;&nbsp;RESULTS</a></li>
			              <li><a href="#"><i class="fa fa-gear fa-gear"></i>&nbsp;&nbsp;SETTINGS</a></li>
			              <?php echo '<a href="logout.php"style="color:black"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; Log Out </a>'; ?>
			            </ul>
			          </li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		    <!--   Menu Bar Section End -->
		  </header>

		 

		  <!-- Start Banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
					<img src="img\gallery.jpg" height="520" width="1366">
					<div class="about-content col-lg-12" style="margin-top: -270px">
							<h1 class="text-white">
								DASHBOARD		
							</h1>	
							<p class="text-white link-nav"><a href="Dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="Dashboard.php"> &nbsp;DASHBOARD</a></p>
						</div>
			</section>
			<!-- End Banner Area -->




	
	<!-- For Chat App -->
	<div id="ChatDiv" style="height: 550px; border-color: grey; margin-top: 70px;">
		<h1 style="font-style: sans-serif; margin: 15px 40px -10px; text-align: center;"> Chat Forum </h1>
		<div id="msgArea" style="border-color: grey">
			<?php

				include("connection.php");
		
				$q1 = "SELECT * FROM msghistory ";
				$r1 = mysqli_query($con,$q1);

				while($row = mysqli_fetch_assoc($r1))
				{
					$msg = $row['message'];
					$uname = $row['user_name'];
					echo '<h4 style="color: red; padding-left:20px; padding-top:7px;">'.$uname.'</h4>';
					echo '<p style="padding-left:50px;">'.$msg.'</p>';
					echo '<hr>';
				}

				if (isset($_POST['submit'])) 
				{
					$msg = $_POST['msg'];
					$q = 'INSERT INTO msghistory (id,message,user_name) VALUES ("","'.$msg.'","'.$_SESSION['uname'].'")';
					if (mysqli_query($con,$q)) 
					{
						echo '<h4 style="color : red; padding-left:20px;">'.$_SESSION['uname'].'</h4>';
						echo '<p style="padding-left:20px;">'.$msg.'</p>';
					}
				}
			?>
		</div>
		<form method="post">
			<input type="text" id="textmsg" name="msg" placeholder="Type Your Message.." />

			<input type="submit" id="submit" name="submit" value="Send" />
		</form>
	</div>
</body>
</html>