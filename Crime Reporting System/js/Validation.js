<script>
	function validatePhoneNo(mob)
	{
		var phoneno = /^\d{10}$/;
		if(mob.value.match(phoneno))
		{
			return true;
		}
		else
		{
			alert("Not a valid Phone Number");
			return false;
		}
	}
	
	function validateEmail(mail)
	{
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(mail.value.match(mailformat))
		{
			return true;
		}
		else
		{
			alert("Invalid Email Address!");
			return false;
		}
	}
</script>