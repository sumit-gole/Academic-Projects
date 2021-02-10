<!DOCTYPE html>
<html>
<body bgcolor="blue" align="center" link="white" alink="red" vlink="white" style="margin-top:200px; color:white;">

<!-- ASP Code for User Complaint Form -->
<%
set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open "C:\inetpub\wwwroot\Crime Reporting System\CrimeDB\CrimeDB.mdb"

sql="INSERT INTO Complaint(CmpID,Victim_Name,VFatherName,Gender,VEmail,Mobile,DOB,IDType,IDno,VNationality,VState,VDistrict,VPoliceStation,VCity,VArea,VStreetNo,VHouseNo,VPinCode,Accussed_Name,Accussed_Address,Accussed_Gender,PersonOtherInfo,CompanyName,CompanyAddress,CompanyOtherInfo,NatureOfComplaint,IncidentDate,IState,IDistrict,IPinCode,IPoliceStation,ActType,IncidentPlace,IncidentDescription,EvidenceDescription,UploadFile)"
sql=sql & " VALUES "
sql=sql & "('" & Request.Form("id") & "',"
sql=sql & "'" & Request.Form("vname") & "',"
sql=sql & "'" & Request.Form("fname") & "',"
sql=sql & "'" & Request.Form("vgender") & "',"
sql=sql & "'" & Request.Form("email") & "',"
sql=sql & "'" & Request.Form("mobile") & "',"
sql=sql & "'" & Request.Form("dob") & "',"
sql=sql & "'" & Request.Form("idtype") & "',"
sql=sql & "'" & Request.Form("idno") & "',"
sql=sql & "'" & Request.Form("nationality") & "',"
sql=sql & "'" & Request.Form("state") & "',"
sql=sql & "'" & Request.Form("dist") & "',"
sql=sql & "'" & Request.Form("police") & "',"
sql=sql & "'" & Request.Form("city") & "',"
sql=sql & "'" & Request.Form("area") & "',"
sql=sql & "'" & Request.Form("street") & "',"
sql=sql & "'" & Request.Form("house") & "',"
sql=sql & "'" & Request.Form("pincode") & "',"
sql=sql & "'" & Request.Form("ainame") & "',"
sql=sql & "'" & Request.Form("aiadrs") & "',"
sql=sql & "'" & Request.Form("agender") & "',"
sql=sql & "'" & Request.Form("aiotherinfo") & "',"
sql=sql & "'" & Request.Form("acname") & "',"
sql=sql & "'" & Request.Form("acadrs") & "',"
sql=sql & "'" & Request.Form("acotherinfo") & "',"
sql=sql & "'" & Request.Form("natureofcomplaint") & "',"
sql=sql & "'" & Request.Form("date") & "',"
sql=sql & "'" & Request.Form("istate") & "',"
sql=sql & "'" & Request.Form("idistrict") & "',"
sql=sql & "'" & Request.Form("ipincode") & "',"
sql=sql & "'" & Request.Form("ipolicestation") & "',"
sql=sql & "'" & Request.Form("acttype") & "',"
sql=sql & "'" & Request.Form("place") & "',"
sql=sql & "'" & Request.Form("idesc") & "',"
sql=sql & "'" & Request.Form("eviddesc") & "',"
sql=sql & "'" & Request.Form("file") & "')"

on error resume next
conn.Execute sql,recaffected
if err<>0 then
  Response.Write("No Update Permissions...!!!")
else
  Response.Write("<h1>" & recaffected & " Record Added Successfully...</h1>")
end if
conn.close
%>
<!-- ASP Code for User Complaint Form -->

</body>
</html>