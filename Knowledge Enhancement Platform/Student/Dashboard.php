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
			  				<h4 style="text-align: center; color: white; margin-top: 10px; margin-left: 20px;">
							<?php
								session_start();

								if(isset($_SESSION['uname']))
								{
									echo 'Welcome &nbsp;&nbsp;&nbsp;'.'<a href="#" style="color:red;">'.$_SESSION['uname'].'</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;';
									echo' <a href="/kef edu/ChatForum/ChatForum.php"><i class="fa fa-comment" style="margin-left:380px;"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
									echo' <a href="#"><i class="fa fa-bell"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
								}
								else
								{
									header("location:login.php");
								}
							?></h4>
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
			          <li><a href="/kef edu/Student/Dashboard.php">Home</a></li>
			          <li><a href="/kef edu/About.php">About</a></li>
			          <li><a href="#"> Chat Forum </a>
			          	<ul>
			          		<li><a href="/KEF Edu/ChatForum/ChatForum.php">Chat Room</a></li>
			          		<li><a href="/KEF Edu/DiscussionForum/pages/home.php"> Q&A Discussion Forum</a></li>
			          	</ul>
			          </li>
			          <li><a href="#">Curriculum </a>
			            <ul>
			              <li><a href="/kef edu/assignment/student.php">Assignments</a></li>
			              <li><a href="/kef edu/quiz/quiz.html">Exams</a></li>
			              <li><a href="/kef edu/quiz/quiz.html">Quiz</a></li>
			            </ul>
			          </li>
			          <li><a href="#">Events</a></li>
			          <li><a href="Gallery.php">Gallery</a></li>        					          		          
			          <li><a href="/kef edu/Student/Feedback.php">FeedBack </a></li>
			          <li style="margin-top: -55px; margin-right: -100px;"><a href="#">Profile </a>
			            <ul>
			              <li><a href="/kef edu/Student/Dashboard.php"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			              <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;PROFILE</a></li>
			              <li><a href="/kef edu/StudyMaterial.php"><i class="fa fa-gear fa-book"></i>&nbsp;&nbsp;STUDY MATERIALS</a></li>
			              <li><a href="/Kef edu/ExamSchedule.php"><i class="fa fa-book"></i>&nbsp;&nbsp;ACADEMIC SCHEDULE</a></li>
			              <li><a href="#"><i class="fa fa-file"></i>&nbsp;&nbsp;ASSIGNMENTS</a></li>
			              <li><a href="#"><i class="fa fa-gear fa-list-alt"></i>&nbsp;&nbsp;RESULTS</a></li>
			              <li><a href="#"><i class="fa fa-certificate"></i>&nbsp;&nbsp;CERTIFICATES</a></li>
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

	<!-- Start Dashboard Area -->
			<!-- Announcemts Tag (Block) "OPEN"  -->
			<div class="forScrollNews">
				<span>
					<h2 style="background-color: white; border: 1px black solid; width: 260px; height: 60px; padding-top: 10px;">&nbsp;&nbsp;Annoncements : </h2><div style="color: white; margin-top: -60px;">
					<marquee style="margin-left: 260px; height: 60px; padding-top: 15px; border: 1px solid black;" bgcolor="black(x,x,x)" scrollamount="13" onmouseover="this.stop();" onmouseout="this.start();">
						<h3 ><b> <a href="" style="color: white;">"Hackthon 2019 Has been announced in the month of November." </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="" style="color: white;">"Expert session on INTERNET OF THINGS by Mr.Parth Shukla in the month of December." </a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color: white;">"Student developement programs in the month of november, GO FOR REGISTRATION." </a></b></h3>
					</marquee></div>
				</span>
			</div>
			<!-- Announcements Tag (Block) "CLOSE"  -->

		<!-- Whole Right Dashboard Section Start -->
	<div class="mainDash" style="border: 15px solid grey; margin-top: -7px; height: 1235px;">
			<!--  Video Lessons Sec Start -->
			<div class="leftDiv">
				<div class="VideoLesson" style="text-align: center; ">
					<br><br><br><u style="color: black; "><h1 style="font-size: 50px;"> ENGAGING VIDEO LESSONS </h1></u><br><br>
					<h4 style="font-size: 25px;"> Video that help tou visualize each concept ,
					making it easier to understand. Clearer</h4>
					<h4 style="font-size: 25px;"> concepts lead to higher scores.!</h4><br><br>
					<video width="130" controls style="width: 30%;">
						<source src="img/sandip.mp4" type="video/mp4">
							Your Browser Does Not Support HTML5 Video.
					</video>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<video width="130" controls style="width: 30%;">
						<source src="img/sandip3.mp4" type="video/mp4">
							Your Browser Does Not Support HTML5 Video.
					</video> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<video width="130" controls style="width: 30%;">
						<source src="img/sandip.mp4" type="video/mp4">
							Your Browser Does Not Support HTML5 Video.
					</video> <br><br><br>
					<input type="submit" name="submit" value="View More Video Lessons" style="background-color: #6A1AB0; color:white; height:50PX; width:260px; border-radius:30px; font-size: 17px; font-weight:bold" /><br>
				</div>
			<!-- Video Lessons Sec End -->

			<div class="rightDiv"style="border-top: 15px solid grey; margin-top: 50px;">
				<!-- Noticeboard Start -->
				<div class="Noticeboard" style="border:1px solid grey; width: 500px; height: 400px;margin-left: 150px; margin-top: 70px;">
					<div style="background-color: hsl(0,80%,50%); color: white; height: 50px;">
						<h2 align="center" style="color: white;padding-top:7px"><i class="fa fa-bank"> &nbsp;&nbsp;NOTICE BOARD</i></h2>
					</div>

					<div align="left" style="margin-left: 80px; margin-top: 20px;">
						<style> ul h6 li a{color: black;} </style>
						<ul type="disc">
							<h6>
								<li><a href="#"> MCA and MBA Examination November-2019</a></li><br>
								<li><a href="#"> Scholarship Freeship Form</a></li><br>
								<li><a href="#"> Fees Structures</a></li><br>
								<li><a href="#"> Registration for Alumini Meet</a></li><br>
								<li><a href="#"> Curicular Events</a></li><br>
								<li><a href="#"> Decleration For Anti-Ragging</a></li><br>
								<li><a href="#"> Student Enrollment</a></li><br>
								<li><a href="#"> Information Brochure</a></li><br>
								<li><a href="#"> Disclosure for Events</a></li><br>
								<li><a href="#"> Expert Session Enrollment</a></li><br>
							</h6>
						</ul>
					</div>
				</div>
				<!-- Noticeboard End -->

				<!-- Quick Links Start -->
				<div class="QuickLinks" style="border:1px solid grey; width: 500px; height: 400px; margin-left: 850px; margin-top: -400px;">
					<div style="background-color: hsl(0,80%,50%); color: white; height: 50px;">
						<h2 align="center" style="color: white;padding-top:7px"><i class="fa fa-link"> &nbsp;&nbsp;&nbsp;IMPORTANT LINKS</i></h2>
					</div>

					<div align="left" style="margin-left: 80px; margin-top: 20px;">
						<style> ul h6 li a{color: black;} ul h6 li{list-style-type: circle;} </style>
						<ul type="disc">
							<h6>
								<li><a href="#"> MCA Exam Schedule </a></li><br>
								<li><a href="#"> MBA Exam Schedule</a></li><br>
								<li><a href="#"> Certification Courses</a></li><br>
								<li><a href="#"> Registration e-Library </a></li><br>
								<li><a href="#"> Convocation Registration</a></li><br>
								<li><a href="#"> MCA & MBA Exam Papers </a></li><br>
								<li><a href="#"> Time Tables</a></li><br>
								<li><a href="#"> Results </a></li><br>
								<li><a href="#"> News And Updates </a></li><br>
								<li><a href="#"> Anti Ragging </a></li><br>
							</h6>
						</ul>
					</div>
				</div>
				<!-- Quick Links End -->
			</div>
			<!-- Enf Dashboard Area -->

		</div><br><br>
		<!-- Whole Right Dashboard Section End -->

		<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="height: 380px; width: 102%; margin-left: -15px;margin-top:12px;">
				<div class="container">
					<div class="row" style="margin-top: -70px; margin-left: -50px;">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h3 style="color: white;">ABOUT US</h3><br>
								<ul>
									<li><a>"We serve to adopt new way of education.</a></li>
									<li><a>The interactive way of analysing the education system.</a></li>
									<li><a>which enhance skills for future developement".</a></li>
								</ul>								
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-sm-6" style="margin-left: 160px;">
							<div class="single-footer-widget" style="width: 380px;">
								<h3 style="color: white;">CONTACT US</h3><br>
								<p style="font-size: 18px;"> Knowledge Enhancement Platform.<br>
								Complex, Sector 29, Nigdi Pradhi Akurdi, Pune-411044.</p>
								<h4> Contact : </h4>
								<p>Phone : (020) 27640998<br>
								Additional No: 9923602480<br>
								Fax : +91-20-27653057<br>
								Email : kefEdu999@gmanil.com</p>

							</div>
						</div>	
						<!----- NEWS LETTER ------>																	
						<div class="col-lg-4  col-md-6 col-sm-6" style="margin-left: 230px;">
							<div class="single-footer-widget">
								<h3 style="color: white;">NEWSLETTER</h3><br>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="" method="get">
										<div class="input-group">
									    <input type="email" class="form-control" required placeholder="Enter Email Address">
									    	<div class="input-group-btn">
										    	<button class="btn btn-default" type="submit">
										       		<span class="lnr lnr-arrow-right">GO</span>
										     	</button>    
									    	</div>	 
									  	</div>
									</form> 
								</div>
							</div>
						</div>										
					</div>
					<div class="footer-bottom row align-items-center justify-content-between" style="margin-top: -50px;margin-left: 250px;">
						<p style="color: white">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							All rights reserved || This Website is made with  by <i class="fa fa-heart-o" aria-hidden="true"></i> 
							 <a href="https://the-programmer-guru.blogspot.com"> 
							kefEdu999@gmail.com.in</p>
						</p>
						<div class="col-lg-6 col-sm-12 footer-social" style="margin-left: 330px;margin-top: -250px;">
							<a href="https://www.facebook.com/DYPIMCAM/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/mcambaplacement"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/iam.sumiit/?hl=en"><i class="fa fa-instagram"></i></a>
							<a href="https://in.linkedin.com/in/dypimca-mba-88aa62148"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	

	

		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="main.css">

		<script src="jquery.js"></script>			
		<script src="main.js"></script>			
	</body>
</html>