<?php
	session_start();
	if(isset($_SESSION['rno']))
	{
		unset($_SESSION['rno']);
		header("location:login.php");
	}
	else
	{
		header("location:login.php");
	}

?>