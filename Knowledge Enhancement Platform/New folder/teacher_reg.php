<html>
<head>
<title>Teacher Regestration Form</title>
<link href="css/css.css" type="text/css" rel="stylesheet"/>
<script>
function validateForm() 
{
var y = document.forms["form"]["fname"].value;	
if (y == null || y == "") 
{
	alert(" First Name must be filled out.");
	return false;
}
var ly = document.forms["form"]["lname"].value;	

if (ly == null || ly == "") 
{
	alert("Last Name must be filled out.");
	return false;
}
var x = document.forms["form"]["email"].value;
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
{
	alert("Not a valid e-mail address.");
	return false;
}
var p=document.forms["form"]["phone"].value;
if(p.length<10 || p.length>10)
{
	alert("Phone Number must be 10 digit.");
	return false;
}
var d=document.forms["form"]["deg"].value;
if(d == null || d == "")
{
	alert("Please filled designation");
	return false;
}
var s=document.forms["form"]["sub"].value;
if(s == null || s == "")
{
	alert("Please enter subject name");
	return false;
}
var exp=document.forms["form"]["exp"].value;
if(exp == null || exp == "")
{
	alert("Please enter experience");
	return false;
}
var a = document.forms["form"]["password"].value;
if(a == null || a == "")
{
	alert("Password must be filled out");
	return false;
}
if(a.length<5 || a.length>25)
{
	alert("Passwords must be 5 to 25 characters long.");
	return false;
}
var b = document.forms["form"]["cpassword"].value;
if (a!=b)
{
	alert("Passwords must match.");
	return false;
}
}
</script>

</head>
<body>
<?php
include_once 'dbConnection.php';
$fname=$_POST['fname'];
$email = $_POST['eemail'];
$pass = $_POST['pass'];

$result = mysqli_query($con,"SELECT temail FROM teacher WHERE temail = '$email' and tpswd = '$pass'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
session_start();
if(isset($_SESSION['temail'])){
session_unset();}
$_SESSION["tfname"] = $fname;
$_SESSION["temail"] = $email;
header("location:dash.php?q=0");
}
else header("location:$ref?w=Warning : Access denied");
?>
<div class="container main-menu">
<div class="row align-items-center justify-content-between d-flex">
<div id="logo">
<a href="HomePage.html"><img src="img/logo.png"/></a>
<div id="container11">
<div id="container3">
<img src="img/img.png"  height="0170" width="0170"/>
<h3 id="heading2"><span>Hey!</span> I am new user</h3>
</div>
<div id="container2">
<h1 id="heading"><b>Regestration</b></h1>
<form name="form" onSubmit="return validateForm()" method="POST">
<input type="text" class="name" placeholder="First name" name="fname">
<input type="text" class="name" placeholder="Last name" name="lname"><br>
<input type="email" class="e" placeholder="Email" name="eemail"><br>
<input type="text" class="e" placeholder="Mobile Number" name="phone"><br>
<input type="text" class="e" placeholder="Designation" name="deg"><br>
<input type="text" class="e" placeholder="Subject Name" name="sub"><br>
<input type="text" class="e" placeholder="Experience" name="exp"><br>
<input type="password" class="e" placeholder="Password" name="pass"><br>
<input type="password" class="e" placeholder="Confirm password" name="cpassword"><br/>
<input type="submit" value="Register" class="submit"/>
</form>
<p class="change_link">  Already a member ?
<a href="login.html" class="to_register"> Go and log in </a>
</p>
</div>          
</div>
</div>
</div>
</body>
</html>