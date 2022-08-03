function validate_pass(pForm) {
	let flag = 0;

	if (pForm.password.value === "" ||pForm.password.value === null ) {
		document.getElementById("passError").innerHTML = "Please fill up the New password";
		flag = 1;
	}

	

	if (flag === 0) {
		return true;
	}
	return false;
}