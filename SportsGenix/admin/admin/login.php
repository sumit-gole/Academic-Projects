<?php
//include config
require_once('../includes/config.php');
//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Favicon icon -->
    
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
          <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form" id="login">
                                <h4>Login</h4>
                                  <form action="" method="post">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="username" placeholder="Enter your Email ID" value="saurabhsumit@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="12345">
                                    </div>
                                    <!--<div class="checkbox">
                                        <label>
        										<input type="checkbox"> Remember Me
        									</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
        									</label>

                                    </div> -->
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <!-- <p>Don't have account ? <a href="#"> Sign Up Here</a></p> -->
                                    </div>
                                </form>
                                
                                <?php
									//process login form if submitted
									if(isset($_POST['submit'])){
								
										$username = trim($_POST['username']);
										$password = trim($_POST['password']);
										
										if($user->login($username,$password)){ 
								
											//logged in return to index page
											header('Location: index.php');
											exit;
										
								
										} else {
											$message = '<p class="error" style="color:red; text-align:center;">Incorrect email or password</p>';
										}
								
									}//end if submit
								
									if(isset($message)){ echo $message; }
									?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>