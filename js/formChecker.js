let fname = document.getElementByName('firstName').value;
let lname = document.getElementByName('lasttName');
let email = document.getElementByName('email');
let pwSignUp = document.getElementByName('passwordSignUp');
let pwConfirm = document.getElementByName('passwordSignUpConfirm');


	function validateForm(evt,val,limit)
	{
		if(val.length >= limit)
		{
			return false;
		}
	return true;
	}

	function passwordValidation(evt,val)
	{
		if(val.length < 6)
		{
			return false;
		}

	return true;
	}
	function passwordConfirmation(evt,val)
	{
			if(val.value == pwSignUp.value)
			{
				alert("equal")
			}
		return false;
	}

