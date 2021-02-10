<html>
<body bgcolor="blue" align="center" link="white" alink="red" vlink="white" style="margin-top:200px; color:white;">

<!-- ASP Code for User Registration Form -->
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
set rs = Server.CreateObject("ADODB.recordset")

sql="INSERT INTO Registration (First_Name,Last_Name,Email,"
sql=sql & "Mobile,IDType,ID,Username,Pswd)"
sql=sql & " VALUES "
sql=sql & "('" & Request.Form("fname") & "',"
sql=sql & "'" & Request.Form("lname") & "',"
sql=sql & "'" & Request.Form("mail") & "',"
sql=sql & "'" & Request.Form("mob") & "',"
sql=sql & "'" & Request.Form("idtype") & "',"
sql=sql & "'" & Request.Form("idd") & "',"
sql=sql & "'" & Request.Form("user") & "',"
sql=sql & "'" & Request.Form("pswd") & "')"

on error resume next
conn.Execute sql,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  'Response.Write("<h3>" & recaffected & " Record Added</h3>")
  Response.Write("<h1>-- Registration Completed Successfully --</h1>")
end if
conn.close
%>
<h2 align="center"><a href="UserLogin.asp">Back To Login </a></h2>
<!-- ASP Code for User Registration Form -->

</body>
</html>