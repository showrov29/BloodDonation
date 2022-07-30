function validate_registration(pForm) 
{

	let flag = 0;

	if (pForm.fname.value === "" ||pForm.fname.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.lname.value === ""||pForm.lname.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}


	if (pForm.gender.value === ""||pForm.gender.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}


	if (pForm.phone.value === ""||pForm.phone.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}
	

	if (pForm.username.value === ""||pForm.username.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}
	if (pForm.password.value === ""||pForm.password.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;




}


