<?php
      session_start();
      if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
      }
      else
      {
        header("Location:../pages/content.php");
      }
    $username=$_SESSION['username'];
    $userid = $_SESSION['user_Id'];
?>
<!DOCTYPE html>
<html>
        <head>
            <title> Dashboard </title>
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
                <div class="container" >
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
                            <h4 style="text-align: center; color: white; margin-top: 10px; margin-left: 30px;">
                            <?php
                        
                                if(isset($_SESSION['uname']))
                                {
                                    echo ' Welcome &nbsp;&nbsp;&nbsp;'.'<a href="#" style="color:red;">'.$_SESSION['uname'].'</a> &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;';
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
                    <a href="Dashboard.php" style="margin-left: -330px;"><img src="/kef edu/img/logo.png"/></a>
                  </div>
                  <nav id="nav-menu-container" style="margin-right: -400px;">
                    <ul class="nav-menu" style="color: black">
                      <li><a href="/kef edu/Student/Dashboard.php">Home</a></li>
                      <li><a href="About.php">About</a></li>
                      <li><a href="#"> Chat Forum </a>
                        <ul>
                            <li><a href="/KEF Edu/ChatForum/ChatForum.php">Chat Room</a></li>
                            <li><a href="/KEF Edu/DiscussionForum/pages/home.php"> Q&A Discussion Forum</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Curriculum </a>
                        <ul>
                          <li><a href="">Assignments</a></li>
                          <li><a href="#">Exams</a></li>
                          <li><a href="#">Quiz</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events</a></li>
                      <li><a href="Gallery.php">Gallery</a></li>                                                      
                      <li><a href="/kef edu/Student/Feedback.php">FeedBack </a></li>
                      
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
                                DISCUSS WITH YOUR FRIENDS     
                            </h1>   
                            <p class="text-white link-nav"><a href="/kef edu/Student/Dashboard.php">HOME </a>  &nbsp; <span style='font-size: 20px;'>&#8594;</span>  <a href="#"> &nbsp;DISCUSSION-FORUM</a></p>
                        </div>
            </section>
            <!-- End Banner Area -->

            
    <div class="container" style="margin:7% auto;">
    	<h4>Latest Discussion</h4>
    	<hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Programming</h3>
                </div> 
                 <div class="panel-body">

                            <?php

                include "../functions/db.php";
                     $id = $_GET['post_id'];
                     
                
                $sql = mysql_query("SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
                if($sql==true){
                  while($row=mysql_fetch_assoc($sql)){
                    extract($row);
                    if($user_Id==009){
                       echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Posted By: </label> Admin";
                    }
                    else{
                      $sel = mysql_query("SELECT * from tbluser where user_Id='$user_Id' ");
                      while($row=mysql_fetch_assoc($sel)){
                        extract($row);
                        echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo '<label>Posted By: </label>'.$fname.' '.$lname;
                      }
                      
                    }
                }
                }     
              ?>
              <br><label>Comments</label><br>
              <div id="comments">
              <?php 
              $postid= $_GET['post_id'];
              $sql = mysql_query("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' order by datetime");
              $num = mysql_num_rows($sql);
              if($num>0){
              while($row=mysql_fetch_assoc($sql)){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }

            }
              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Comment</h3>
          <form method="POST">
            <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
            <input type="submit" id="save" class="btn btn-success pull-right" value="Comment">
          </form>
        </div>
    </div>

		<div class="my-quest" id="quest">
            <div> 
                <form method="POST" action="question-function.php">
                        
                         <label>Category</label>
                        <select name="category" class="form-control">
                            <option></option>
                            <option value="Programming">Programming</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Computer Networking">Computer Networking</option>
                        </select>
                        <label>Topic Title</label>
                        <input type="text" class="form-control" name="title"required>
                        <label>Content</label>
                        <textarea name="content"class="form-control">

                        </textarea>
                       <br>
                        <input type="submit" class="btn btn-success pull-right" value="Post">
                   </form><br>
                <hr>
                  <a href="" class="pull-right">Close</a>
              </div>
        </div>

         <!-- start footer Area -->      
            <footer class="footer-area section-gap" style="height: 400px; width: 1504px; margin-left: -5px;margin-top:70px; margin-bottom: -110px;">
                <div class="container">
                    <div class="row" style="margin-top: -80px; margin-left: -50px;">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h3 style="color: white;">ABOUT US</h3><br>
                                <ul style="color: grey;">
                                    <li><a>"We serve to adopt new way of education.</a></li>
                                    <li><a>The interactive way of analysing the education system.</a></li>
                                    <li><a>which enhance skills for future developement".</a></li>
                                </ul>                               
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6" style="margin-left: 160px;">
                            <div class="single-footer-widget" style="width: 380px;">
                                <h3 style="color: white;">CONTACT US</h3><br>
                                <p style="font-size: 18px; color: grey;"> Knowledge Enhancement Platform.<br>
                                Complex, Sector 29, Nigdi Pradhi Akurdi, Pune-411044.</p>
                                <h4> Contact : </h4>
                                <p style="color: grey;">Phone : (020) 27640998<br>
                                Additional No: 9923602480<br>
                                Fax : +91-20-27653057<br>
                                Email : kefEdu999@gmanil.com</p>

                            </div>
                        </div>  
                        <!----- NEWS LETTER ------>                                                                 
                        <div class="col-lg-4  col-md-6 col-sm-6" style="margin-left: 230px;">
                            <div class="single-footer-widget">
                                <h3 style="color: white;">NEWSLETTER</h3><br>
                                <p style="color: grey;">Stay update with our latest</p>
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
                        <p class="footer-text m-0 col-lg-6 col-md-12" style="color: grey">
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
</body>
<script>
    $("#save").click(function(){
    var postid = $("#postid").val();
    var userid = $("#userid").val();
    var comment = $("#commenttxt").val();
    var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
    if(!comment){
      alert("Please enter some text comment");
    }
    else{
      $.ajax({
        type:"POST",
        url: "../functions/addcomment.php",
        data: datastring,
        cache: false,
        success: function(result){
          document.getElementById("commenttxt").value=' ';
          $("#comments").append(result);
        }
      });
    }
    return false;
    })
</script>
</html>