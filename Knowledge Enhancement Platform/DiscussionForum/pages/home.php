<!DOCTYPE html>
<html>
        <head>
            <title> Discussion Forum </title>
            <!-- ***********  BOOTSTRAP FOR SOCIAL ICONS  ************* -->
            <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

            <link rel="stylesheet" href="/kef edu/css/bootstrap.css">
            <link rel="stylesheet" href="/kef edu/css/main.css">
            <script src="/kef edu/js/jquery.js"></script>           
            <script src="/kef edu/js/main.js"></script> 

            <!--Custom CSS-->
            <link rel="stylesheet" type="text/css" href="../css/global.css">
            <!--Bootstrap CSS-->
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

            <!--Script-->
            <script src="../js/jquery.js"></script>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/bootstrap.min.js"></script> 
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
                    <a href="Dashboard.php" style="margin-left: -100px;"><img src="/kef edu/img/logo.png"/></a>
                  </div>
                  <nav id="nav-menu-container" style="margin-left: 500px;">
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
                                DISCUSSION FORUM   
                            </h1>   
                            <p class="text-white link-nav"><a href="/kef edu/student/Dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="#"> &nbsp;FORUM</a></p>
                        </div>
            </section>
            <!-- End Banner Area -->
            <!-- Start DF Section -->
            <div class="container" style="margin:7% auto;margin-top: -5px;">
               <h4 style="font-size: 25px;">LATEST DISCUSSION</h4>
               <div style="font-size: 25px; margin-top: -50px;margin-left: 800px;">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#quest" style="color: black;"> <u>POST A QUESTION </u> </a></li>
                    </ul>
               </div><br><br>
               <hr>
                <?php  include "../functions/db.php";

                $sel = mysql_query("SELECT * from category");
                while($row=mysql_fetch_assoc($sel)){
                    extract($row);
                   echo '<div class="panel panel-success">
                            <div class="panel-heading">
                            <h3 class="panel-title">'.$category.'</h3>
                            </div> 
                            <div class="panel-body">
                            <table class="table table-stripped">
                            <tr>
                            <th>Topic title</th>
                            <th>Category</th>
                            <th>Action</th>
                            </tr>';
                    $sel1 = mysql_query("SELECT * from tblpost where cat_id='$cat_id' ");
                    while($row1=mysql_fetch_assoc($sel1)){
                                extract($row1);
                                echo '<tr>';
                                echo '<td>'.$title.'</td>';
                                echo '<td>'.$category.'</td>';
                                echo '<td><a href="content.php?post_id='.$post_Id.'"><button class="btn btn-success">View</button></td>';
                                echo '</tr>';
                    }
                    echo '</table>
                                </div>
                            </div>';
                }
                ?>
                <div class="my-quest" id="quest">
                    <div> 
                        <form method="POST" action="question-function.php">
                                
                                 <label>Category</label>
                                <select name="category" class="form-control">
                                    <option></option>
                                    <?php $sel = mysql_query("SELECT * from category");

                                        if($sel==true){
                                            while($row=mysql_fetch_assoc($sel)){
                                                extract($row);
                                                echo '<option value='.$cat_id.'>'.$category.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                                <label>Topic Title</label>
                                <input type="text" class="form-control" name="title"required>
                                <label>Content</label>
                                <textarea name="content"class="form-control">
                                </textarea>
                               <br>
                                <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                                <input type="submit" class="btn btn-success pull-right" value="Post">
                           </form><br>
                        <hr>
                          <a href="" class="pull-right">Close</a>
                      </div>
                </div></br><br>



           <!-- start footer Area -->       
            <footer class="footer-area section-gap" style="height: 380px; width: 135%; margin-left: -200px;margin-bottom:-110px;">
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
                    <div class="footer-bottom row align-items-center justify-content-between" style="margin-top: -50px;">
                        <p style="color: white">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                            All rights reserved || This Website is made with  by <i class="fa fa-heart-o" aria-hidden="true"></i> 
                             <a href="https://the-programmer-guru.blogspot.com"> 
                            kefEdu999@gmail.com.in</p>
                        </p>
                        <div class="col-lg-6 col-sm-12 footer-social" style="margin-left: 530px;margin-top: -250px;">
                            <a href="https://www.facebook.com/DYPIMCAM/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/mcambaplacement"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/iam.sumiit/?hl=en"><i class="fa fa-instagram"></i></a>
                            <a href="https://in.linkedin.com/in/dypimca-mba-88aa62148"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>                      
                </div>
            </footer>   
            <!-- End footer Area -->    

    

        <link rel="stylesheet" href="kef edu/css/bootstrap.css">
        <link rel="stylesheet" href="kef edu/css/main.css">

        <script src="jquery.js"></script>           
        <script src="main.js"></script>         
    </body>
</html>