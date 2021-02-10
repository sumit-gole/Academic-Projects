<html>
<head>
<title>Instite Regestration Form</title>
<link href="css/css.css" type="text/css" rel="stylesheet"/>
<script>
function validateForm() 
{
var y = document.forms["form"]["name"].value;	
if (y == null || y == "") 
{
	alert("Institute Name must be filled out.");
	return false;
}
var p=document.forms["form"]["phone"].value;
if(p.length<10 || p.length>10)
{
	alert("Phone Number must be 10 digit.");
	return false;
}
var d=document.forms["form"]["address"].value;
if(d == null || d == "")
{
	alert("Please enter address");
	return false;
}
var s=document.forms["form"]["city"].value;
if(s == null || s == "")
{
	alert("Please enter city name");
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
<form name="form" action="" onSubmit="return validateForm()" method="POST">
<input type="text" class="e" placeholder="Institute name"  name="name"><br>
<input type="text" class="e" placeholder="Mobile Number" name="phone" ><br>
<input type="text" class="e" placeholder="Address" name="address"><br>
<input type="text" class="e" placeholder="City" name="city"><br>
<input type="email" class="e" placeholder="Email" name="email"><br>
<input type="password" class="e" placeholder="Password" name="password"><br>
<input type="password" class="e" placeholder="Conform password" name="cpassword"><br/>
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