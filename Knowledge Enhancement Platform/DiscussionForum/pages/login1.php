<!-- Login PHP CODE for Student LOGIN -->
                        <?php
                            session_start();
                            include("connection.php");
                            if (isset($_POST['login'])) 
                            {
                                $uname= $_POST['uname'];
                                $pswd = $_POST['pswd'];

                                $q = 'SELECT * FROM student_regi where uname="'.$uname.'" and pswd="'.$pswd.'" ';
                                $r = mysqli_query($con,$q);
                                if (mysqli_num_rows($r) > 0) 
                                {
                                    //echo 'You Are Now Login..';
                                    $_SESSION['uname'] = $uname;
                                    header("location:home.php");
                                }
                                else
                                {
                                    echo 'Your Password and UserName do not match..!!';
                                }
                            }echo "HIIII";$_SESSION['uname'] = $uname;
                                    header("location:home.php");
                        ?>