<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$uname=$_SESSION['uname'];

?>
<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	
                <ul class="nav navbar-nav navbar-left">
                   <li><a href="home.php"> Dashboard</a></li>
                    <li><a href="post.php"> Topics</a></li>
                    <li  class="active"><a href="user.php"> Users</a></li>
                    <li><a href="category.php">Category</a></li>
                    <li><a href="feedback.php">Students Feedback</a></li>


                </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $uname;?></a></li>
                <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               
                </ul>

                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container" style="margin:8% auto;width:900px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">STUDENTS</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                               
     <?php
        require_once("connection.php");
       // include("functions/crud.php");

        $qry = "SELECT * FROM student_regi";
        $result = mysqli_query($con,$qry);
        echo '<div class="container">
                        <div class="card">
                                <div class="card-body">
                                    <table class="table"><tr><th>ID</th><th>FIRST NAME</th><th> LAST NAME</th><th>USERNAME</th><th>MOBILE</th><th>ACTIONS</th></tr>';

        while ($row = mysqli_fetch_array($result)) 
        {
            echo    '
                                        <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['fname'].'</td>
                                            <td>'.$row['lname'].'</td>
                                            <td>'.$row['uname'].'</td>
                                            <td>'.$row['mobile'].'</td>
                                             <td><button class="btn btn-danger" onclick="deleteuser(".$id.");">Delete</button>
                                            
                                        </tr>';
        }
            echo '                </table>
                                </div>
                        </div>
                </div>';
    ?>
                            </table>
                     </div>
                </div>

            </div>


            <!--   FOR TEACHER DETAILS     -->
            <div class="container" style="margin:8% auto;width:900px; margin-top: -60px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">TEACHER-STAFF</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                               
     <?php
        require_once("connection.php");
       // include("functions/crud.php");

        $qry = "SELECT * FROM teacher_regi";
        $result = mysqli_query($con,$qry);
        echo '<div class="container">
                        <div class="card">
                                <div class="card-body">
                                    <table class="table"><tr><th>ID</th><th>FIRST NAME</th><th> LAST NAME</th><th>USERNAME</th><th>MOBILE</th><th>DESIGNATION</th><th>SUBJECT</th><th>ACTIONS</th></tr>';

        while ($row = mysqli_fetch_array($result)) 
        {
            echo    '
                                        <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['fname'].'</td>
                                            <td>'.$row['lname'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['mobile'].'</td>
                                            <td>'.$row['designation'].'</td>
                                            <td>'.$row['subject'].'</td>
                                             <td><button class="btn btn-danger" onclick="deleteuser(".$id.");">Delete</button>
                                            
                                        </tr>';
        }
            echo '                </table>
                                </div>
                        </div>
                </div>';
    ?>
                            </table>
                     </div>
                </div>

            </div>

            <!-- FOR INSTITUTE RECORDS  -->
            <div class="container" style="margin:8% auto;width:900px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">INSTTITUTE</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                               
     <?php
        require_once("connection.php");
       // include("functions/crud.php");

        $qry = "SELECT * FROM institute_regi";
        $result = mysqli_query($con,$qry);
        echo '<div class="container">
                        <div class="card">
                                <div class="card-body">
                                    <table class="table"><tr><th>ID</th><th>INSTITUTE NAME</th><th> REGI. NO</th><th>ADDRESS</th><th>CITY</th><th>EMAIL</th><th>ACTIONS</th></tr>';

        while ($row = mysqli_fetch_array($result)) 
        {
            echo    '
                                        <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['iname'].'</td>
                                            <td>'.$row['rno'].'</td>
                                            <td>'.$row['address'].'</td>
                                            <td>'.$row['city'].'</td>
                                            <td>'.$row['email'].'</td>
                                    
                                             <td><button class="btn btn-danger" onclick="deleteuser(".$id.");">Delete</button>
                                            
                                        </tr>';
        }
            echo '                </table>
                                </div>
                        </div>
                </div>';
    ?>
                            </table>
                     </div>
                </div>

            </div>

            <!--   FOR DIRECTOR DETAILS     -->
            <div class="container" style="margin:8% auto;width:900px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">DIRECTOR</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                               
     <?php
        require_once("connection.php");
       // include("functions/crud.php");

        $qry = "SELECT * FROM director";
        $result = mysqli_query($con,$qry);
        echo '<div class="container">
                        <div class="card">
                                <div class="card-body">
                                    <table class="table"><tr><th>ID</th><th>FIRST NAME</th><th> LAST NAME</th><th>CITY</th><th>EXPERIENCE</th><th>USERNAME</th><th>MOBILE</th><th>ACTIONS</th></tr>';

        while ($row = mysqli_fetch_array($result)) 
        {
            echo    '
                                        <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['fname'].'</td>
                                            <td>'.$row['lname'].'</td>
                                            <td>'.$row['city'].'</td>
                                            <td>'.$row['experience'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['mobile'].'</td>
                                             <td><button class="btn btn-danger" onclick="deleteuser(".$id.");">Delete</button>
                                            
                                        </tr>';
        }
            echo '                </table>
                                </div>
                        </div>
                </div>';
    ?>
                            </table>
                     </div>
                </div>

            </div>

            <script type="text/javascript">

            function deleteuser(id){
                var datastring = 'action=deleteuser&id='+id;
                var con = confirm("Are you sure you want to delete..??");
                if(con==true){
                    $.ajax({
                    type: "POST",
                    url: "functions/crud.php",
                    data: datastring,
                    success: function(result){
                        if(result=="success"){
                            window.location.href="user.php";
                        }
                        else{
                            alert("Failed to delete");
                        }
                    }
                });
                }
                
                return false;
            }

            </script>
	</body>
</html>