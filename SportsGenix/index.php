

<!DOCTYPE html>
<html>
<?php require('includes/config.php'); ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
       <!--css-->
        <link href="assets/css/master.css" rel="stylesheet" type="text/css">
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/general.js" type="text/javascript"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">

    <script>
    function clickCounter() {
        if (typeof(Storage) !== "undefined") {
            if (localStorage.clickcount) {
                localStorage.clickcount = Number(localStorage.clickcount)+1;
            } else {
                localStorage.clickcount = 1;
            }
            document.getElementById("result").innerHTML = localStorage.clickcount + " People's Interested For This Event..";
        } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
        }
    }
    </script>


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include('includes/navbar.php');?>

    
        </div>
        
        <div class="all-container">
            <div class="row nopadding">

                <div class="col-md-12 nopadding">
                    <div class="col-md-7 nopadding">
                        <div class="blog-listing">

                            <?php       
					try {

					$pages = new Paginator('4','p');

					$stmt = $db->query('SELECT postID FROM sa_posts');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT * FROM sa_posts ORDER BY postID DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){

                    echo '<div class="blog-listing-one">';

			           echo '<h2><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>'; 
                       echo  '<div class="blog-listing-one-img">';
                        echo  '<a href="'.$row['postSlug'].'"><img src="admin/uploads/'.$row['image'].'" width="100%"></a>';
                        echo '</div>';

                        echo'<div class="blog-listing-one-like-bookmark">';
                            echo '<ul>';
                              echo '<li><i class="fa fa-calendar" aria-hidden="true"></i><span> On:</span> '.date('jS M Y', strtotime($row['postDate'])).'</li>';

							  $stmt2 = $db->prepare('SELECT catTitle, catSlug FROM sa_categories, sa_post_categories WHERE sa_categories.catID = sa_post_categories.catID AND sa_post_categories.postID = :postID');
								$stmt2->execute(array(':postID' => $row['postID']));

								$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

								$links = array();
								foreach ($catRow as $cat)
								{
								    $links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
								}

							   echo '<li><i class="fa fa-folder-open"></i><span> Category: </span>'.implode(", ", $links).'</li>';

                           echo '</ul>';
                        echo '</div>';

                        echo '<p>'.$row['postDesc'].'</p>';

                        echo '<a href="'.$row['postSlug'].'" class="btn-readmore">Continue Reading</a>'; 

                     echo '</div>';

					}

					echo $pages->page_links();

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}

		          ?>
                        </div>
                    
                    </div>
                    <!--end of col-md-7-->

                    <div class="col-md-5 nopadding padding-left">
                        <div id='sidebar'>
                            <?php require('sidebar.php'); ?>
                        </div>
                    </div>

                    <!--end of col-05-->
                </div>
                <!--end of col-md-12-->
            </div>
            
        </div>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/images/1Capture.png" alt="" style="margin-top:-90px; margin-bottom:-85px"></a>
                        </div>
                        <ul>

                            <li>Email : sportsgenix@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1" style="">
                    <div class="footer-widget">
                        <h5>QUICK LINKS</h5>
                        <ul>
                            <li><a href="#">ICC Rankings</a></li>
                            <li><a href="#">Fantasy Pick</a></li>
                            <li><a href="#">La-Liga</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>FEATURED</h5>
                        <ul>
                            <li><a href="#">Indian Super League</a></li>
                            <li><a href="#">La-Liga</a></li>
                            <li><a href="#">ICC T20 2020</a></li>
                            <li><a href="#">FIH Pro League 2020</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Get Newsletter & Alerts</h5>
                        <p>Get E-mail updates about our latest news and live score.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <h6 style="color: white; text-align: center; height: 0px;">Cantact Us&nbsp;&nbsp;
                |&nbsp;&nbsp;Terms of Service&nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Report a Bug</h6>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text" style="margin-left: 150px;">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> FootyWeek.com Sports Media Ltd. All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">FootyWeek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>