function validate_newPass(pForm) {
	let flag = 0;

	if (pForm.uname.value === "" ||pForm.uname.value === null ) {
		document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.Npassword.value === ""||pForm.Npassword.value === null) {
		document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the New password";
		flag = 1;
	}
	if (pForm.CNpassword.value === ""||pForm.CNpassword.value === null) {
		document.getElementById("CNpasswordErrorMsg").innerHTML = "Please fill up the Confirm password";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;
}