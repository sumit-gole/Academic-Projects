<html>
<body bgcolor="blue" align="center" link="white" alink="red" vlink="white" style="margin-top:200px; color:white;">

<!-- ASP Code for User Registration Form -->
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
sql="INSERT INTO Feedback (FirstName,LastName,Email,Phone,FeedType,Feedback)"
sql=sql & " VALUES "
sql=sql & "('" & Request.Form("fname") & "',"
sql=sql & "'" & Request.Form("lname") & "',"
sql=sql & "'" & Request.Form("email") & "',"
sql=sql & "'" & Request.Form("phone") & "',"
sql=sql & "'" & Request.Form("feedtype") & "',"
sql=sql & "'" & Request.Form("feedback") & "')"

on error resume next
conn.Execute sql,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  Response.Write("<h1>-- Feedback Sent to Administrator --</h1>")
  response.write("<script>alert('Feedback Sent to Administrator');</script>")
  'request.redirect("FeedbackForm.asp")
end if
conn.close
%>
<h2 align="center"><a href="CrimeHome.asp">Back To HomePage </a></h2>
<!-- ASP Code for User Registration Form -->
	
</body>
</html>