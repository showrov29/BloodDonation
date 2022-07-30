function validate_pass(pForm) {
	let flag = 0;

	if (pForm.password.value === "" ||pForm.password.value === null ) {
		//document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	

	if (flag === 0) {
		return true;
	}
	return false;
}