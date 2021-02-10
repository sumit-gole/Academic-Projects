<!DOCTYPE html>
<html>
		<head>
			<title> Feedback </title>
			<link rel="stylesheet" href="/kef edu/css/bootstrap.css">
		<link rel="stylesheet" href="/kef edu/css/main.css">
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
									echo 'Welcome &nbsp;&nbsp;&nbsp;'.'<a href="#" style="color:red;">'.$_SESSION['uname'].'</a> &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;';
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
			              <li><a href="">Assignments</a></li>
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
								ASK ANY QUERY	
							</h1>	
							<p class="text-white link-nav"><a href="Dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="/kef edu/Student/feedback.php"> &nbsp;FEEDBACK</a></p>
						</div>
			</section>
			<!-- End Banner Area -->		  

			<?php
			require_once("connection.php");

			if (isset($_POST['register'])) 
			{
				$name= $_POST['name'];
				$email= $_POST['email'];
				$subject= $_POST['subject'];
				$message= $_POST['message'];

				if ($name !="" and $email !="" and $subject !="" and $message !="") 
				{
					$q = "INSERT INTO feedback(id,name,email,subject,message)
						VALUES('', '".$name."', '".$email."', '".$subject."','".$message."')";

					if(mysqli_query($con,$q))
					{
						//echo "Message Sent Successfully..";
						echo "<script>alert('Message Sent Successfully..');</script>";
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

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; margin-top: -100PX;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Knowledge Enhancement Platform - Education</h5>
									<p>
										Complex, Sector 29, Nigdi Pradhikaran Akurdi, Pune-41104
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>Phone : (020) 27640998</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>kefEdu999@gmail.com.in</h5>
									<p>Send Us Your Query Anytime..!!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" name="register" style="float: right;">Send Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

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
	</body>
</html>