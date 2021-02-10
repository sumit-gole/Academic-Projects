<!DOCTYPE html>
<html>
<head>
	<title> Judgement Report </title>
	<style>
		#banner ul li{list-style:none;}
		/*  Text Scroll Bar..  */
		div.digimarquee{
			position: static;height: 325px;width: 650px;overflow: auto;
		}
	</style>
	
	<!-- <link rel="stylesheet" href="CSS-FILE\login.css"> -->
	<link href="CSS-FILE\Menu.css" rel="stylesheet">
	<link href="Images\Web.css" rel="stylesheet">
	<script type="text/javascript" src="js/Login.js"></script>

</head>
<body class="body_bg" link="#C0C0C0" vlink="#FFFFFF" alink="#FF0000">


<div class="main1" style="margin-left: -8px;margin-right: -8px; margin-top: -14px; background-image: url('Images/bgimg.jpg');">
<div class="main2" style="margin-left: 58px;margin-right: 58px; background-color: white;">
<!-- 1st Div Tag (Block) "OPEN"  -->
<div class="top" >
	<table cellspacing="5">
	<b><font color="white"><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BHARAT SARKAR &nbsp;&nbsp;| &nbsp; GRRIH MANTRALAYA </br> &nbsp;&nbsp;&nbsp;GOVERNMENT OF INDIA    &nbsp;| &nbsp; Maharashtra State Police  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;" href="#" onClick="changeSizeHome=('large') "> [A+]</a><a style=" text-decoration: none;" href="#"> [A]</a> <a style="text-decoration: none;" href="#">[A-]</a></p></font></b></table>
<style> 
	div.top{background:#18559B;}
</style>
</div>
<!-- 1st Div Tag (Block) "CLOSE"  -->

<!-- 2nd Div Tag (Block) "OPEN"  -->
<div class="secondRow" style="color: black;">
	<img src="Images\logo1.png"height="170" width="200" style="float: left; margin-left: 15px;"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="Images\smj1.jpeg" height="90" width="70" style="float:center;margin-top: 20px;margin-bottom: -20px; margin-left:50px"/>  
	<h1 align="center" style="margin-right:220px;text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9b9,0 5px 0 #aaa,0 0 6px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);   font-family:serif;">ONLINE CRIME BUREAU </h1>
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
<div class="TitleName" style="background-color: grey; height: 55px;-webkit-box-shadow: 0 8px 18px -6px black; -moz-box-shadow: 0 8px 6px -6px black; -box-shadow: 0 8px 6px -6px black;">
	<a href="CrimeHome.asp"><img src="Images\home.png" height="50" width="50" style="margin-left: 90px; margin-top: 2px;"></a>
	<h2 align="center" style="margin-top: -65px;"><p>-- CRIMINAL REPORT --</p></h2>
<style> 
	div.top{background:#18559B;}
</style>
</div><br>
<!-- 3rd Div Tag (Block) "CLOSE"  -->
<!-- 4th Div Tag (Block) for Print Button  -->
<div>
<input type="submit" value="Print Report" class="submitButton" onClick="window.print()" style="margin-top: 1%"/>
<input type="date" name="printDateWise" style="margin-left:3%; border:1px solid; width:150px; height:30px; border-radius:8px;"/>
 </div>
<!-- 4th Div Tag (Block) for Print Button  -->

<!-- 5th Div Tag for Report "OPEN" -->
<div style="margin-top:20px;">
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
set rs = Server.CreateObject("ADODB.recordset")
sql="SELECT CrID,Criminal_Name,CrAddress,State,District,City,DOB,Gender,Arrested_Date,Crime_Type,Crime_Date,Occupation,Identification_Mark,Marital_Status,Criminal_Image FROM Criminal "
rs.Open sql, conn
%>

<table border="1" width="100%" style="color:black;">
<tr>
<%for each x in rs.Fields
    response.write("<th>" & x.name & "</th>")
next%>
</tr>
<%do until rs.EOF%>
    <tr align="center">
    <%for each x in rs.Fields%>
       <td><%Response.Write(x.value)%></td>
    <%next
    rs.MoveNext%>
    </tr>
<%loop
rs.close
conn.close
%>
</table>

<br><br>
</div>
<!-- 5th Div Tag for Report "CLOSE" -->

</div> <!--  Main2 Div Tag Close-->


<!-- 6th Div Tag (Block) for Footer Info. "OPEN" -->
	<div class="footer-copyright" align="center" style="margin-top: 50px; height: 55px;">
		<div style="color: black;margin-top: -67px;margin-left: -290px;">
			<h2>VISIT US ON :</h2>
				<div style="margin-left: 400px;margin-top: -62px;">
					<a href="#"><img src="Images\twitter3.png" width="50" height="50"></a>
					<a href="#"><img src="Images\fb1.png" width="50" height="50"></a>
					<a href="#"><img src="Images\insta1.png" width="50" height="50"></a>
					<a href="#"><img src="Images\g2.png" width="50" height="50"></a>
				</div>
		</div>
		<strong class="copy">
			<p>© Content Owned by Maharashtra State Police, Government of India</p>
		</strong>
	</div>
<!-- 6th Div Tag (Block) for Footer Info. "CLOSE" -->

</div>
</body>
</html>