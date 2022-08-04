function validate_Profile(pForm) {
	let flag = 0;

	if (pForm.fname.value === "" || pForm.fname.value === null) {
		document.getElementById("unameErrorMsg").innerHTML = "Please fill up the First Name";
		flag = 1;
	}

	if (pForm.lnamne.value === "" ||  pForm.lnamne.value === null) {
		document.getElementById("lnameErr").innerHTML = "Please fill up the Last Name";
		flag = 1;
	}
	if (pForm.phone.value === "" || pForm.phone.value === null) {
		document.getElementById("phoneErr").innerHTML = "Please fill up the Phone Number";
		flag = 1;
	}

	
	if (flag === 0) {
		return true;
	}
	return false;
}
