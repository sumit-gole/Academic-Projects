<?php 
require_once('../includes/config.php');


if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <title>Edit Category</title>
    <!-- Style Sheet -->
           <?php include('includes/css.php');?> 
     <!-- Style Sheet -->

</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
        <!-- Main wrapper  -->
      <div id="main-wrapper">
          
        <!-- Menu -->
           <?php include('includes/menu.php');?> 
        <!-- End Menu -->
    
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->

            <div id="wrapper">
	
		
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Category</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        
            <div class="container-fluid">
            

                
                <div class="row">
				    <div class="col-lg-12">
                        <div class="card">

                            <?php

                     
                            if(isset($_POST['submit'])){

                                extract($_POST);

                                //validation
                                if($catID ==''){
                                    $error[] = 'This post is missing a valid id!.';
                                }

                                if($catTitle ==''){
                                    $error[] = 'Please enter the title.';
                                }

                                if(!isset($error)){

                                    try {

                                        $catSlug = slug($catTitle);

                                        $stmt = $db->prepare('UPDATE sa_categories SET catTitle = :catTitle, catSlug = :catSlug WHERE catID = :catID') ;
                                        $stmt->execute(array(
                                            ':catTitle' => $catTitle,
                                            ':catSlug' => $catSlug,
                                            ':catID' => $catID
                                        ));

                        
                                        header('Location: categories.php?action=updated');
                                        exit;

                                    } catch(PDOException $e) {
                                        echo $e->getMessage();
                                    }

                                }

                            }

                            ?>


                            <?php
                            
                            if(isset($error)){
                                foreach($error as $error){
                                    echo $error.'<br />';
                                }
                            }

                                try {

                                    $stmt = $db->prepare('SELECT catID, catTitle FROM sa_categories WHERE catID = :catID') ;
                                    $stmt->execute(array(':catID' => $_GET['id']));
                                    $row = $stmt->fetch(); 

                                } catch(PDOException $e) {
                                    echo $e->getMessage();
                                }

                            ?>

		        
                                            <div class="card-body">

                                                 <form class="form-horizontal form-material" method='post'>
                                                     
                                                     <input type='hidden' name='catID' value='<?php echo $row['catID'];?>'>
                                                     
                                                    <div class="form-group">
                                                        <label class="col-md-12">Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" name='catTitle' value='<?php echo $row['catTitle'];?>' placeholder="Enter Category Name" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button type="submit" name='submit' value='Update' class="btn btn-danger">Update</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                         
                        </div>
                    </div>
                </div>



                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> Copyrights &copy; <?php echo date("Y"); ?> <a href="" target="_blank">sportsgenix</a>. All Rights Reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    
     <!-- Java Scripts -->
           <?php include('includes/js.php');?> 
     <!-- End Java Scripts -->

</body>

</html>