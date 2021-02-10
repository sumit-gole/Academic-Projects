<!DOCTYPE html>
<html>
		<head>
			<title> Knowledge Enhancement Platform - Education </title>
			<!-- ***********  BOOTSTRAP FOR SOCIAL ICONS  ************* -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>	
		  <!--   Header Section Start -->
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding" style="margin-top: 10px; margin-left: -120px;">
			  				<ul>
								<a href="https://www.facebook.com/DYPIMCAM/"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://twitter.com/mcambaplacement"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://www.instagram.com/iam.sumiit/?hl=en"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://in.linkedin.com/in/dypimca-mba-88aa62148"><i class="fa fa-linkedin"></i></a>
			  				</ul>			
			  			</div>

			  			<!-----   Welcome USER NAME Session Start  -->
			  			<div>
			  				<h5 style="text-align: center; color: white; margin-top: 10px;">
							<?php
								session_start();
								if(isset($_SESSION['uname']))
								{
									echo ' Welcome &nbsp;&nbsp;&nbsp;'.'<a href="#" style="color:red;">'.$_SESSION['uname'].'</a>';
									echo' <a href="ChatForum.php"><i class="fa fa-comment" style="margin-left:380px;"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
									echo' <a href="#"><i class="fa fa-bell"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;';
									echo '<a href="php/logout.php"><i class="fa fa-sign-out"></i> Log Out </a>';
								}
								else
								{
									header("location:Student/login.php");
								}
							?></h5>
						</div>
						<!-----   Welcome USER NAME Session End  -->

			  		</div>			  					
	  			</div>
			</div>	
		 	<!--   Header Section End -->

		  	<!--   Dashboard Section Start -->
		    <div id="sidebar">
				<div class="list">
					<div class="item"><a style="color: white;text-decoration: none;" href="HomePage.php"><i class="fa fa-home"></i>&nbsp;&nbsp; Home </a> </div>
					<div class="item"><a style="color: white;text-decoration: none;" href="Dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard </a></div>
					<div class="item"><a style="color: white;text-decoration: none;" href="#"><i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp; Study Materils </a></div>
					<div class="item"><a style="color: white;text-decoration: none;" href="#"><i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp; Settings </a></div>
					<div class="item"><a style="color: white;text-decoration: none;" href="#"><i class="fa fa-sign-out"></i>&nbsp;&nbsp; Logout </a></div>
				</div>
				<div id="toggle-btn" onclick="toggleSidebar()">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!--   Dashboard Section End -->

		  	<!--   Menu Bar Section Start -->
		    <div class="container main-menu">

		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="HomePage.html"><img src="img/logo.png"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="HomePage.php">Home</a></li>
			          <li><a href="About.html">About</a></li>
			          <li><a href="#"> Chat Forum </a></li>
			          <li><a href="#">Curriculum </a>
			            <ul>
			              <li><a href="#">Assignments</a></li>
			              <li><a href="#">Exams</a></li>
			              <li><a href="#">Quiz</a></li>
			            </ul>
			          </li>
			          <li><a href="Events.html">Events</a></li>
			          <li><a href="Gallery.html">Gallery</a></li>        					          		          
			          <li><a href="Contact.html">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		    <!--   Menu Bar Section End -->
		  </header>

			<!-- Start Banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12" style="margin-top: -210px;">
							<h1 class="text-uppercase">
								We Ensure better education
								for a better world			
							</h1>
							<p class="pt-10 pb-10">
								Education is the Key to Success in Life, and Teachers make a lasting impact in the lives of their Students.
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End Banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Learn From The Experts</h4>
								</div>
								<div class="desc-wrap">
									<p>
										*****************
									</p>
									<a href="#">See Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Book & Library </h4>
								</div>
								<div class="desc-wrap">
									<p>
										*****************
									</p>
									<a href="#">See Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<a href="Faculty.html"><h4>Certified Teachers</h4></a>
								</div>
								<div class="desc-wrap">
									<p>
										A certified teacher is a teacher who has earned credentials from an authoritative source, such as the government, a higher education institution.
									</p>
									<a href="Faculty.html">See Now</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
					
			
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of Our Institute</h1>
								<p>If you want to see the Complete Information of our Institute's Events, then Click on it</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/Fresher.png">
								</div>
								<div class="detials col-12 col-md-6">
									<p>04th October, 2019</p>
									<a href="#"><h4>Fresher's Party</h4></a>
									<p>
										This event is organised by Second Year Students to have a good communication with the juniors and to welcome the juniors in their College. 
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/naacCulture.jpg" style="height : 200px">
								</div>
								<div class="detials col-12 col-md-6">
									<p>19th October, 2019</p>
									<a href="#"><h4>NAAC Cultural</h4></a>
									<p>
										We are organizing this event for the NAAC, it has given performance over Indian Culture.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/gandhi.jpg" style="height : 200px">
								</div>
								<div class="detials col-12 col-md-6">
									<p>2nd October, 2019</p>
									<a href="#"><h4>Gandhi Jayanti</h4></a>
									<p>
										Gandhi Jayanti is a national holiday in India celebrated on 2nd October. This day is celebrated in the honor of the birthday of the Father of the nation, Mohandas Karamchand Gandhi, popularly known as Mahatma Gandhi or Bapuji.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/Fresher.png">
								</div>
								<div class="detials col-12 col-md-6">
									<p>2nd October, 2019</p>
									<a href="#"><h4>Fresher's Party</h4></a>
									<p>
										This event is organised by Second Year Students to have a good communication with the juniors and to welcome the juniors in their College.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/naacCulture.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>19th October, 2019</p>
									<a href="#"><h4>NAAC Cultural</h4></a>
									<p>
										We are organizing this event for the NAAC, it has given performance over Indian Culture.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/gandhi.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>2nd October, 2019</p>
									<a href="#"><h4>Gandhi Jayanti</h4></a>
									<p>
										Gandhi Jayanti is a national holiday in India celebrated on 2nd October. This day is celebrated in the honor of the birthday of the Father of the nation, Mohandas Karamchand Gandhi, popularly known as Mahatma Gandhi or Bapuji.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
						
				
			
			

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest Posts From Our Institute</h1>
								<p>The latest announcement of our institute will be shown here.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/parth.jpg" alt="">								
							</div>
							<p class="meta">25 November, 2019  |  By <a href="#">Parth Shukla</a></p>
							<a href="blog-single.html">
								<h5>Session About Industry 4.0 & IoT </h5>
							</a>
							<p>
								This session has been organized by Partha Shukla, to improve student's skills and knowledge and student's get information about the new trends and technologies.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/parth.jpg" alt="">								
							</div>
							<p class="meta">25 November, 2019  |  By <a href="#">Parth Shukla</a></p>
							<a href="blog-single.html">
								<h5>Session About Industry 4.0 & IoT </h5>
							</a>
							<p>
								This session has been organized by Partha Shukla, to improve student's skills and knowledge and student's get information about the new trends and technologies.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/parth.jpg" alt="">								
							</div>
							<p class="meta">25 November, 2019  |  By <a href="#">Parth Shukla</a></p>
							<a href="blog-single.html">
								<h5>Session About Industry 4.0 & IoT </h5>
							</a>
							<p>
								This session has been organized by Partha Shukla, to improve student's skills and knowledge and student's get information about the new trends and technologies.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>

						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/parth.jpg" alt="">								
							</div>
							<p class="meta">25 November, 2019  |  By <a href="#">Parth Shukla</a></p>
							<a href="blog-single.html">
								<h5>Session About Industry 4.0 & IoT </h5>
							</a>
							<p>
								This session has been organized by Partha Shukla, to improve student's skills and knowledge and student's get information about the new trends and technologies.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="height: 380px">
				<div class="container">
					<div class="row" style="margin-top: -50px; margin-left: -50px;">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h3 style="color: white;">Quick Links</h3><br>
								<ul>
									<li><a href="#">Ebooks</a></li>
									<li><a href="#"></a></li>
									<li><a href="#">D. Y. Patil College of Engineering, Pune</a></li>
									<li><a href="#">Dr. D. Y. Patil College of Pharmacy, Akurdi, Pune</a></li>
								</ul>								
							</div>
						</div>

						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h3 style="color: white;">############</h3>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>								
							</div>
						</div>
						
					
						<div class="col-lg-2 col-md-6 col-sm-6" style="margin-left: 30px;">
							<div class="single-footer-widget" style="width: 380px;">
								<h3 style="color: white;">CONTACT US</h3><br>
								<p> Dr. D.Y.Patil Institute of MCA and Mgt.<br>
								Complex, Sector 29, Nigdi Pradhi Akurdi, Pune-411044.</p>
								<h4> College : </h4>
								<p>Phone : (020) 27640998<br>
								Additional No: 9923602480<br>
								Fax : +91-20-27653057<br>
								Director Email : director@dypimca.ac.in</p>

							</div>
						</div>	
						<!----- NEWS LETTER ------>																	
						<div class="col-lg-4  col-md-6 col-sm-6" style="margin-left: 155px;">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
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
					<div class="footer-bottom row align-items-center justify-content-between" style="margin-top: -50px; ">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							All rights reserved || This Website is made with  by <i class="fa fa-heart-o" aria-hidden="true"></i> 
							 <a href="https://the-programmer-guru.blogspot.com" target="_blank"> 
							SUMIT</a>
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

			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/Dashboard.css">

			<script src="js/jquery.js"></script>			
			<script src="js/main.js"></script>		
			<script>
				function toggleSidebar() {
				document.getElementById("sidebar").classList.toggle("active");
			}
			</script>		
		</body>
	</html>