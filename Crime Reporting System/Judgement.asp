<html>
<body bgcolor="blue" align="center" link="white" alink="red" vlink="white" style="margin-top:200px; color:white;">

<!-- ASP Code for User Registration Form -->
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
sql="INSERT INTO Judgement (JID,CmpID,CriminalID,CriminalName,Court,SectionNo,Judge,"
sql=sql & "PoliceIncharge,SuspectName,SuspectAdrs,RegisterDate,FullReport)"
sql=sql & " VALUES "
sql=sql & "('" & Request.Form("jid") & "',"
sql=sql & "'" & Request.Form("cmp_id") & "',"
sql=sql & "'" & Request.Form("cr_id") & "',"
sql=sql & "'" & Request.Form("cname") & "',"
sql=sql & "'" & Request.Form("court") & "',"
sql=sql & "'" & Request.Form("section") & "',"
sql=sql & "'" & Request.Form("judge") & "',"
sql=sql & "'" & Request.Form("police") & "',"
sql=sql & "'" & Request.Form("sname") & "',"
sql=sql & "'" & Request.Form("adrs") & "',"
sql=sql & "'" & Request.Form("date") & "',"
sql=sql & "'" & Request.Form("report") & "')"

on error resume next
conn.Execute sql,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  'Response.Write("<h3>" & recaffected & " Record Added</h3>")
  Response.Write("<h1>-- Judgement Record Added Successfully --</h1>")
end if
conn.close
%>
<h2 align="center"><a href="CrimeHome.html">Back to HomePage </a></h2>
<!-- ASP Code for User Registration Form -->
	
</body>
</html>