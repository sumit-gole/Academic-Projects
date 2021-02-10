var attempt=3;
function validate()
{
	var username=document.getElementById("username").value;
	var pswd=document.getElementById("pswd").value;
	if(username=="Crime"&pswd=="Crime")
	{
		alert("Login Successfull..");
		window.open('ComplaintForm.html')
		return false;
	}
	else
	{
		attempt --;
		alert("Error in Username and Password..   You have Left "+attempt+" attempt;");
		if (attempt==0) 
		{
			document.getElementById("username").disabled=true;
			document.getElementById("pswd").disabled=true;
			document.getElementById("login").disabled=true;
			return false;
		}
	}
}

//*************************************************
    // Get the modal
    var modal = document.getElementById('myModal');
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block"; 
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
//************************************************


/******************** For Tab in Complaint Form ************************/
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
/******************** For Tab in Complaint Form ************************/ 



/******************** For Admin Login Validation ***********************/
var attempt1=3;
function adminvalidate()
{
  var username1=document.getElementById("username1").value;
  var pswd1=document.getElementById("pswd1").value;
  if(username1=="Admin"&pswd1=="Admin")
  {
    alert("Login Successfull..");
    window.open('ReportDisplay.asp')
    return false;
  }
  else
  {
    attempt1 --;
    alert("Error in Username and Password..   You have Left "+attempt1+" attempt;");
    if (attempt1==0) 
    {
      document.getElementById("username1").disabled=true;
      document.getElementById("pswd1").disabled=true;
      document.getElementById("login1").disabled=true;
      return false;
    }
  }
}
/******************** For Admin Login Validation ***********************/