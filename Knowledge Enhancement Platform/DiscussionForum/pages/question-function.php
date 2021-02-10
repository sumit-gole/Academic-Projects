<?php

	include "../functions/db.php";
 	date_default_timezone_set("Asia/Taipei");
    $datetime=date("Y-m-d h:i:sa");
                        
	extract($_POST);
	$sql = "INSERT INTO tblpost(title,content,datetime, cat_id,user_Id) VALUES ('$title','$content','$datetime','$category','$userid')";
	$res = mysql_query($sql);

	if($res==true)
     {
           echo '<script language="javascript">';
           echo 'alert("Post Successfully")';
           echo '</script>';
           echo '<meta http-equiv="refresh" content="0;url=home.php" />';
      }


?>