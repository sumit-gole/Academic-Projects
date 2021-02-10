<%
If Request.ServerVariables("REQUEST_METHOD")="post" then
	Dim conn,rs,sqlSearch
	Dim name

	name=Request.Form("TxtName")

	sqlSearch=sqlSearch & "('" & Request.Form("TxtName") & "')"

set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"
sqlSearch="select * from Registration where (First_Name like '%" + TxtName.Text + "%')"

conn.Execute sqlSearch
Response.Write(First_Name)
Response.End
conn.close

end if
'else
''	Response.Write("No Record Found")

on error resume next
conn.Execute sqlSearch,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  Response.Write("<h1>-- Criminal Added Successfully --</h1>")
end if
%> 