<?php
	session_start();
	if(isset($_SESSION['uname']))
	{
		unset($_SESSION['uname']);
		header("location:login.php");
	}
	else
	{
		header("location:login.php");
	}

?>