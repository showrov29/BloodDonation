function validate_donor(pForm) 
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
	if (pForm.age.value === "" ||pForm.age.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.gender.value === ""||pForm.gender.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}
	if (pForm.email.value === "" ||pForm.email.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.mobile.value === ""||pForm.mobile.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}
	if (pForm.address.value === "" ||pForm.address.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.bloodGroup.value === ""||pForm.bloodGroup.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;




}