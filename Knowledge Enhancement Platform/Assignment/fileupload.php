<?php  
    include 'connection.php';
                $target_path = "files/";
                $target_path = $target_path.basename( $_FILES['file']['name']);  
  
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
                   // echo $target_path;
                    $sql = "INSERT INTO transition (fileloc,status)VALUES ('".$target_path."','0')";
                    if (mysqli_query($con, $sql)) {
                        echo "New record Created Successfully";
                       
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo "File uploaded successfully!<script>alert('file uploaded successfully !');window.location='teacher.php';</script>";  
                } else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>
