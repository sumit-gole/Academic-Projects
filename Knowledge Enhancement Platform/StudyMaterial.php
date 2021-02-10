<!DOCTYPE html>
<html>
		<head>
			<title> Expert Videos </title>

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
					<img src="img\gallery.jpg" height="720" width="1366">
					<div class="about-content col-lg-12" style="margin-top: -270px">
							<h1 class="text-white">
								LEARN FROM THE EXPERTS
							</h1>	
							<p class="text-white link-nav"><a href="/kef edu/student/Dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="/kef edu/StudyMaterial.php"> &nbsp;SESSIONS</a></p>
					</div>
			</section><br><br>
			<!-- End Banner Area -->

			<!-- Start Study Material Area -->
			<div>
				<h1 style="font-size:35px; text-align: center;"><u>HUMAN RIGHTS EDUCATION PROGRAMME</u></h1><br><br>
				<div class="search-container-1">                   
					<div class="search-1">
						<div class="search-list-container">
							<ul class="search-list">
								<li class="search-item">
								<div class="search-item-container ">
									<div class="search-image">
										<a href='Importance of Human Rights Education.mp4' title=' Importance of Human Rights Education'> 
											<img src='HRD1.png' alt=' Importance of Human Rights Education' />
										</a>
 									</div>
									<div class="search-title">Importance of Human Rights Education</div>
										<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. T.S.N. Sastry</div>
									</div>
									</li>
									<li class="search-item">
										<div class="search-item-container ">
											<div class="search-image">
												<a href='View.aspx?vid=150' title=' Relationship between Values and Human Rights'> 
												<img src='23.png' alt=' Relationship between Values and Human Rights' /></a>
											</div>
											<div class="search-title">An Overview Of Human Rights 1</div>
											<div class="search-title" style="color:#CD5C5C;font-size:11px">Hon.Justice Sambhaji Shinde</div>
										</div>
										</li>
										<li class="search-item">
											<div class="search-item-container ">
												<div class="search-image">
													<a href='‘Inspiring Journey of a Yogi Engineer’ – An interactive session with Dr. H. R. Nagendra.mp4' title=' Relationship between Values and Human Rights'> 
														<img src='24.png' alt=' Relationship between Values and Human Rights' />
													</a> 
													</div>
													<div class="search-title">Human Rights Civil Political Rights</div>
													<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. Payal Thaorey</div>
												</div>
											</li>
											<li class="search-item">
												<div class="search-item-container ">
													<div class="search-image">
														<a href='videoplayback.mp4' title=' Relationship between Values and Human Rights'> 
														<img src='30.png' alt=' Relationship between Values and Human Rights' /></a>
													</div>
													<div class="search-title">Human Rights Education Programme Overview Of Human Rights Programme</div>
													<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. Sanjay Chahande</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<!-- 2nd Part -->
						<div>
				<div class="search-container-1" >                   
					<div class="search-1">
						<div class="search-list-container">
							<ul class="search-list">
								<li class="search-item"style="margin-top: 50px">
								<div class="search-item-container ">
									<div class="search-image">
										<a href='Importance of Human Rights Education.mp4' title=' Importance of Human Rights Education'> 
											<img src='HRD1.png' alt=' Importance of Human Rights Education' />
										</a>
 									</div>
									<div class="search-title">Importance of Human Rights Education</div>
										<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. T.S.N. Sastry</div>
									</div>
									</li>
									<li class="search-item" style="margin-top: 50px">
										<div class="search-item-container ">
											<div class="search-image">
												<a href='View.aspx?vid=150' title=' Relationship between Values and Human Rights'> 
												<img src='23.png' alt=' Relationship between Values and Human Rights' /></a>
											</div>
											<div class="search-title">An Overview Of Human Rights 1</div>
											<div class="search-title" style="color:#CD5C5C;font-size:11px">Hon.Justice Sambhaji Shinde</div>
										</div>
										</li>
										<li class="search-item" style="margin-top: 50px">
											<div class="search-item-container ">
												<div class="search-image">
													<a href='‘Inspiring Journey of a Yogi Engineer’ – An interactive session with Dr. H. R. Nagendra.mp4' title=' Relationship between Values and Human Rights'> 
														<img src='24.png' alt=' Relationship between Values and Human Rights' />
													</a> 
													</div>
													<div class="search-title">Human Rights Civil Political Rights</div>
													<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. Payal Thaorey</div>
												</div>
											</li>
											<li class="search-item" style="margin-left: -1279px; margin-top: 50px;">
												<div class="search-item-container">
													<div class="search-image">
														<a href='videoplayback.mp4' title=' Relationship between Values and Human Rights'> 
														<img src='30.png' alt=' Relationship between Values and Human Rights' /></a>
													</div>
													<div class="search-title">Human Rights Education Programme Overview Of Human Rights Programme</div>
													<div class="search-title" style="color:#CD5C5C;font-size:11px">Dr. Sanjay Chahande</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><br><br><br><br>

				<!-- End Study Material Area -->


				<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="height: 380px; width: 102%; margin-left: -15px;margin-top:520px;">
				<div class="container">
					<div class="row" style="margin-top: -80px; margin-left: -50px;">
						<div class="col-lg-2 col-md-6 col-sm-6" >
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
						<div class="col-lg-4  col-md-6 col-sm-6" style="margin-left: 220px;">
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

			
	

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="jquery.js"></script>			
		<script src="main.js"></script>			
	</body>
	<style>
img {
    width: 50%;
    height: 50%;
}
  .row {
        margin-right: 10px;
        margin-left: 20px;
    }
.search-1 .search-image {
    position: relative;
  
}
.search-1 .search-image img {
        display: block;
        width: 100%; 
        border: 0;
        margin: 0;
        padding: 0;
        -moz-border-radius: 0px;
        -webkit-border-radius: 0px;
        border-radius: 0px;
        -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
    }

.search-1 .search-title {
    position: relative;
    font: 12px 'Open Sans', sans-serif;
    font-weight: bold;
    color: #333333;
    margin:12px;
    text-align: center;
    text-shadow: 0px 1px 1px #fff;
}


.search-container-1 {
    padding: 0px 0px;
    padding-left:75px;
}

.search-1 .search-list-container {
    padding: 0px 0;
}

.search-container-1 ul {
    margin: 0px;
}

.search-container-1 li {
    width: 20%;
    float: left;
    list-style-type: none;
    margin-right: 10px;
    margin-bottom: 10px;
    margin-top:10px;
}
a {
	color: #69C;
	text-decoration: none;
}
a:hover {
	color: #F60;
}
.search-list{
    padding:0;
    margin:20px auto;
}
.search-list li{
  
    overflow: hidden;
    position: relative;
    float:left;
    background: #fff;
    -webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    margin-right: 35px;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
}
.search-list li:last-child{
    margin-right: 0px;
}
.search-list li a{
    text-align: left;
    
    display: block;
    color: #333;
    position: relative;
}

.search-list li:hover{
    background-color:;
    z-index:999;
    -webkit-transform: scale(1.1);  
    -moz-transform: scale(1.1);  
    -ms-transform: scale(1.1);   
    -o-transform: scale(1.1);   
    transform: scale(1.1);  
}
@-moz-keyframes smallToBig{
    from {
        -moz-transform: scale(0.1);
    }
    to {
        -moz-transform: scale(1);
    }
}
@-webkit-keyframes moveFromBottom {
    from {
        -webkit-transform: translateY(100%);
    }
    to {
        -webkit-transform: translateY(0%);
    }
}
@-moz-keyframes moveFromBottom {
    from {
        -moz-transform: translateY(00%);
    }
    to {
        -moz-transform: translateY(0%);
    }
}
</style>
</html>