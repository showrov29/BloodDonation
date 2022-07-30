function validate_event(pForm) {
	let flag = 0;

	if (pForm.edate.value === "" ||pForm.edate.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.etime.value === ""||pForm.etime.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}
	if (pForm.location.value === ""||pForm.location.value === null) {
		//document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;
}