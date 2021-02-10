<html>
    <head>
        <style>
          .assg{
              background-color:white;
              width:740px;
              height: 180px;
              margin-top: 50px;
              margin-left: 0px;
          </style>
           
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
         
    </head>
        <body background="gray">
              <?php
                    include 'connection.php';
                    $query="select * from transition";
                    $result=mysqli_query($con,$query);
                ?>
                <center>
                       <table  class="table table-striped w-auto">
                    <tr>
                        <th colspan="9" style="font-size:30px;">Assignments(Anouncement)</th>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <th>File</th>
                    </tr>
                       <?php
                            while($rows=mysqli_fetch_assoc($result))
                            {
                        ?>
                         <tr>
                    
                        <?php  
                                
                          $loc = $rows['fileloc'];
                                        
                                
                                       // echo "<script>alert('$loc')</script>" ;
                         echo'<td><a href="'.$loc.'" target=_blank>View</a></td>';
                                       
                       ?>
                                    
                        <td><?php echo $rows['fileloc']; ?></td>
                        <td><button class="action">Download</button><button class="action">Delete</button></td>
                        </tr>
                        <?php
                            }
                        ?>
 
                </table><br>
                    <hr>
        <div class="assg">
        <center>
            <h3>Submit Assignments</h3><br><br><br>
            <form action="fileupload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" >
            <input type="submit" value="Upload File">
            </form>
        </center>
        </div>  
                    
    </center>
</body>          
</html>
