<!DOCTYPE html>
<html>
<body bgcolor="blue" align="center" link="white" alink="red" vlink="white" style="margin-top:200px; color:white;">

<!-- ASP Code for User Complaint Form -->
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"

sql="INSERT INTO Criminal(Criminal_Name,CrAddress,State,District,City,DOB,Gender,Arrested_Date,Crime_Type,Crime_Date,Occupation,Identification_Mark,Marital_Status,Criminal_Image)"
sql=sql & " VALUES "
sql=sql & "('" & Request.Form("cname") & "',"
sql=sql & "'" & Request.Form("adrs") & "',"
sql=sql & "'" & Request.Form("state") & "',"
sql=sql & "'" & Request.Form("dist") & "',"
sql=sql & "'" & Request.Form("city") & "',"
sql=sql & "'" & Request.Form("dob") & "',"
sql=sql & "'" & Request.Form("gender") & "',"
sql=sql & "'" & Request.Form("arrest_date") & "',"
sql=sql & "'" & Request.Form("ctype") & "',"
sql=sql & "'" & Request.Form("cdate") & "',"
sql=sql & "'" & Request.Form("occupation") & "',"
sql=sql & "'" & Request.Form("mark") & "',"
sql=sql & "'" & Request.Form("marrital") & "',"
sql=sql & "'" & Request.Form("cfile") & "')"

on error resume next
conn.Execute sql,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  Response.Write("<h1>-- Criminal Added Successfully --</h1>")
end if
conn.close
%>
<!-- ASP Code for User Complaint Form -->
<h2 align="center"><a href="CrimeHome.asp">Back to HomePage</a></h2>

</body>
</html>