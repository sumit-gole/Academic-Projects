<!DOCTYPE html>
<html>
<head>
	<title>Login Form </title>
	<style>
		#banner ul li{list-style:none;}
		/*  Text Scroll Bar..  */
		div.digimarquee{
			position: static;height: 325px;width: 650px;overflow: auto;
		}
	</style>
	
	<!-- For Menu Content [Div-4]  -->
	<link href="CSS-FILE\Menu.css" rel="stylesheet">
	<link href="Images\Web.css" rel="stylesheet">
	<script type="text/javascript" src="js/Login.js"></script>

</head>

<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
set rs = Server.CreateObject("ADODB.recordset")
%>

<body class="body_bg" link="#C0C0C0" vlink="#FFFFFF" alink="#FF0000">

<div class="main1" style="background-color: #18559B; margin-top: -16px;background-image: url('C:/Users/Sumit/Desktop/Crime Reporting System/Images/bgimg.jpg');">
<div class="main2" style="margin-left: 50px;margin-right: 50px; background-color: white;">
<!-- 1st Div Tag (Block) "OPEN"  -->
<div class="top" >
	<table cellspacing="5">
	<b><font color="white"><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BHARAT SARKAR &nbsp;&nbsp;| &nbsp; GRRIH MANTRALAYA </br> &nbsp;&nbsp;&nbsp;GOVERNMENT OF INDIA &nbsp;| &nbsp; Maharashtra State Police  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;" href="#" onClick="changeSizeHome=('large') "> [A+]</a><a style=" text-decoration: none;" href="#"> [A]</a> <a style="text-decoration: none;" href="#">[A-]</a></p></font></b></table>
<style> 
	div.top{background:#18559B;}
</style>
</div>
<!-- 1st Div Tag (Block) "CLOSE"  -->

<!-- 2nd Div Tag (Block) "OPEN"  -->
<div class="secondRow" style="color: black;">
	<img src="Images\logo1.png" height="170" width="200" style="float: left; margin-left: 15px;"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="Images\smj1.jpeg" height="90" width="70" style="float:center;margin-top: 20px;margin-bottom: -20px; margin-left:50px"/>  
	<h1 align="center" style="margin-right:200px;text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9b9,0 5px 0 #aaa,0 0 6px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);   font-family:serif;">ONLINE CRIME BUREAU </h1>
	<img src="Images\DGP.png" height="160" width="190" style="float:right; margin-right: 20px;margin-top: -165px;"/>
</div>
<style>
	.secondRow
	{
		 border-bottom: 2px darkgrey solid; border-bottom-width: medium; border-top: 2px darkgrey solid;
	}
</style>
<!-- 2nd Div Tag (Block) "CLOSE"  -->

<!-- 3rd Div Tag (Block) "OPEN"  -->
<div class="top3" style="background-color: grey; height: 55px;-webkit-box-shadow: 0 8px 18px -6px black; -moz-box-shadow: 0 8px 6px -6px black; -box-shadow: 0 8px 6px -6px black;">
	<a href="CrimeHome.asp"><img src="Images\home.png" height="50" width="50" style="margin-left: 90px; margin-top: 2px;"></a>
<style> 
	div.top{background:#18559B;}
</style>
</div>
<!-- 3rd Div Tag (Block) "CLOSE"  -->

<!-- 4th  Div Tag Login Code "CLOSE" -->
<div class="signup" style="width : 64%; height : 427px;margin-left: 220px;margin-top: 40px; -webkit-box-shadow: 0 13px 40px -6px black; -moz-box-shadow: 0 8px 6px -6px black; -box-shadow: 0 8px 6px -6px black;">
	<form id="ForLogin" method="post" name="ForLogin">
		<img src="Images\purplebg.png">
      		<div class="inputBox" style="color: black; margin-left: 440px; margin-top: -430px;">
      			<h2  style="color: #534389; margin-left: -19px; padding: 20px"><u> Login </u> </h2>
        		<img src="Images\profile1.jpg" height="33" width="30" style="border: 1px solid; border-color: grey; margin-bottom: -12px; ">
        		<input type="text" id="username" name="txtUsername" class="username" placeholder="  Username" required style="margin-left: -2px;"/><br><br>
      			<img src="Images\lock.jpg" height="33" width="30" style="border: 1px solid; border-color: grey; margin-bottom: -12px;">
        		<input type="password" id="pswd" name="txtPassword" class="username" placeholder="  Password " required style="margin-left: -5px;"/><br><br>
      			<input type="checkbox"><label >Remember Me</label><br>
      			<a href="" style="color: black; margin-left: 180px;"> Forgot Password </a><br>
        		<input type="submit" value="LOGIN" id="login" name="btnlogin" class="sendButton"/>
        		<a href="CrimeHome.asp"><input type="button" value="CANCEL" id="cancel" class="sendButton" style="width: 145px" /></a>
        		<label>_________________or________________</label><br><br>
        		<h4><a href="Registration.html" style="color: #534389;"> New Registraton </a></h4>
      		</div>
    </form>
 </div>

 <%
 dim uname,pswd,am
	ins="LOGIN"
	am=request("btnlogin")
	if (am=ins) then 
		sql="select Username,Pswd from Registration where Username='"& request.form("txtUsername") & "' And Pswd='"& request.form("txtPassword") & "'"
		rs.Open sql, conn
		if rs.EOF then
			response.Write("<script>alert('Login Failed..!! <br> Invalid Username and Password..!!');</script>")
		else
			Session.Timeout=5
			'Session("username")=rs("uname")
			'response.Write("<script>alert('Login successfull');</script>")
			response.redirect("ComplaintForm.html")
		end if
	end if
%>	
<!-- 4th  Div Tag Login Code "CLOSE" -->


</div> <!--  Main2 Div Tag Close-->

<!-- 5th Div Tag (Block) for Footer Info. "OPEN" -->
<!-- Footer Section that means in this Block -> Quick Links, Downloads,  Reach Us -->
<div class="footer-copyright" style="margin-top: 50px; height: 55px;">
	<strong class="copy">
		<p>© Content Owned by Maharashtra State Police, Government of India</p>
	</strong>
</div>
<!-- 5th Div Tag (Block) for Footer Info. "CLOSE" -->

</div>
</body>
</html>