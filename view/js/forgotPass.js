function validate_forgotPass(pForm) {
	let flag = 0;

	if (pForm.username.value === "" ||pForm.username.value === null ) {
		document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.phone.value === ""||pForm.phone.value === null) {
		document.getElementById("phoneErr").innerHTML = "Please fill up the phone Number";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;
}


