<!DOCTYPE html>
<html>
		<head>
			<title> Dashboard </title>
			<link rel="stylesheet" href="/kef edu/css/bootstrap.css">
			<link rel="stylesheet" href="/kef edu/css/main.css">

			<script src="/kef edu/js/jquery.js"></script>			
			<script src="/kef edu/js/main.js"></script>		
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
									echo' <a href="/kef edu/ChatForum/ChatForum.php"><i class="fa fa-comment" style="margin-left:380px;"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
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
			          <li><a href="/kef edu/Student/Dashboard.php">Home</a></li>
			          <li><a href="About.php">About</a></li>
			          <li><a href="#"> Chat Forum </a>
			          	<ul>
			          		<li><a href="/KEF Edu/ChatForum/ChatForum.php">Chat Room</a></li>
			          		<li><a href="/KEF Edu/DiscussionForum/index.php"> Q&A Discussion Forum</a></li>
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
			          <li><a href="/kef edu/Student/Feedback.php">FeedBack </a></li>
			          <li style="margin-top: -50px; margin-right: -100px;"><a href="#">Profile </a>
			            <ul>
			              <li><a href="/kef edu/Student/Dashboard.php"><i class="fa fa-home"></i>&nbsp;&nbsp;HOME</a></li>
			              <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;PROFILE</a></li>
			              <li><a href="#"><i class="fa fa-gear fa-book"></i>&nbsp;&nbsp;STUDY MATERIALS</a></li>
			              <li><a href="/Kef edu/ExamSchedule.php"><i class="fa fa-book"></i>&nbsp;&nbsp;ACADEMIC SCHEDULE</a></li>
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
								ACADEMIN SCHEDULE	
							</h1>	
							<p class="text-white link-nav"><a href="/kef edu/student/dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="/kef edu/ExamSchedule.php"> &nbsp;SCHEDULE</a></p>
						</div>
			</section>
			<!-- End Banner Area -->


			<!-- Header starts -->
			<!-- Start Schedule -->
<header>
	<div class="container">
		<div class="row">
			<!-- Page heading starts -->
			<div class="page-head">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="border : 5px solid grey; width: 1000px; height: 80px; margin-left: 40px; margin-top: 50px;">
							<h1 align="center" style="margin-top: 10px;"><span class="color bold">Schedule & Timetables</h1>
						</div><br> <br>
					</div>
				</div>
			</div>
			<!-- Page Heading ends -->

			<!-- Page content starts new -->
			<div style="width: 40%; margin-left: 50px;">
				<style> a{ color: red} </style>
				<h4><strong>Schedule of First Half of the Year 2020</strong></h4><br>
				<ol>
					<li><a href="pdf/Faculty of Science & Technology_07.102019.pdf" target="_blank">Faculty of Science &amp; Technology</a></li>
					<li><a href="#" target="_blank">Faculty of Commerce &amp; Management</a></li>
					<li><a href="#" target="_blank"> of Inter-Disciplinary Studies</a></li>
					<li><a href="#" target="_blank">Practical &amp; Oral March - April 2020</a></li>
					<li><a href="#" target="_blank">Other Fee for March - April 2020</a></li>
					<li><a href="#" target="_blank">Backlog Fee Oct 2019 &amp; Mar 2020</a></li>
					<li><a href="#" target="_blank">Important Instructions </a></li>
					<li><a href="#" target="_blank">Courses List of Examinations - Circular No. 125</a></li>
				</ol>
			</div>

									<div style="width: 40%;margin-left: 150px;">
										<h4><strong>Schedule of First Half of the Year 2018</strong></h4><br>
										<ol>
											<li> <a href="#">Faculty of Science &amp; Technology</a></li>
											<li> <a href="#">Faculty of Commerce &amp; Management</a></li>
											<li> <a href="">Faculty of Humanities</a></li>
											<li><a href="#">Faculty of Inter-Disciplinary Studies</a></li>
											<li><a href="#">Practical &amp; Oral 2018</a></li>
											<li><a href="#">Other Fee</a></li>
											<li><a href="#">Backlog Fee Oct 2017 &amp; March 2018</a></li>
											<li><a href="#">Important Instructions</a></li>
											<li><a href="#">Courses list of Examination</a></li>
										</ol><br><br><br>
									</div>
							
									<div style="width: 40%;margin-left: 50px;">
										<h4><strong>Schedule of Second Half of the Year 2017</strong></h4><br>
										<ol>
											<li><a href="#">Faculty of Science &amp; Technology</a></li>
											<li><a href="#">Faculty of Commerce &amp; Management</a></li>
											<li><a href="#">Faculty of Humanities</a></li>
											<li><a href="#">Faculty of Inter-Disciplinary Studies</a></li>
											<li><a href="#">Practical &amp; Oral Oct 2017</a></li>
											<li><a href="#">ther Fee</a></li>
											<li><a href="#">Backlog Fee Oct 2017 &amp; March 2018</a></li>
											<li><a href="#">Important Instructions</a></li>
											<li><a href="#">Courses list of Examination</a></li>
										</ol>
									</div>

									<div style="width: 40%;margin-left: 150px;">
										<h4><strong>Schedule of First Half of the Year 2017</strong></h4><br>
										<ol>
											<li><a href="#">Faculty of Arts, Fine Arts &amp; Performing Arts, Mental, 
											Moral &amp; Social Sciences</a> </li>
											<li>
											<a href="#" target="_blank">Faculty of Sciences</a> </li>
											<li><a href="#" target="_blank">Faculty of Commerce</a> </li>
											<li><a href="#">Faculty of Education </a></li>
											<li><a href="#" target="_blank">Faculty of Physical Education</a> </li>
											<li><a href="#" target="_blank">Faculty of Law</a> </li>
											<li><a href="#" target="_blank">Faculty of Engineering</a> </li>
											<li><a href="#" target="_blank">Faculty of Management</a> </li>
											<li><a href="#">Faculty of Pharmaceutical Science</a> </li>
											<li><a href="#" target="_blank">Practical &amp; Oral 2017</a> </li>
										</ol>
									</div>
			<!-- End Schedule -->
			
</span>
</h1></div></div></div></div></div></div></header><br><br><br>
<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="height: 380px; width: 101%; margin-left: -15px;margin-top:12px;">
				<div class="container">
					<div class="row" style="margin-top: -60px; margin-left: -50px;">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h3 style="color: white;">ABOUT US</h3><br>
								<ul>
									<li><a href="#">#########</a></li>
									<li><a href="#">#########</a></li>
									<li><a href="#">#########</a></li>
									<li><a href="#">#########</a></li>
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
					<div class="footer-bottom row align-items-center justify-content-between" style="margin-top: -50px;">
						<p class="footer-text m-0 col-lg-6 col-md-12" >
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							All rights reserved || This Website is made with  by <i class="fa fa-heart-o" aria-hidden="true"></i> 
							 <a href="https://the-programmer-guru.blogspot.com" target="_blank"> 
							kefEdu999@gmail.com.in</a>
						</p>
						<div class="col-lg-6 col-sm-12 footer-social">
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
		<link rel="stylesheet" href="Dashboard.css">

		<script src="jquery.js"></script>			
		<script src="main.js"></script>			
	</body>
</html>
</body></html>
