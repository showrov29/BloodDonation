function validate_donor(pForm) 
{

	let flag = 0;

	if (pForm.fname.value === "" ||pForm.fname.value === null ) {
		document.getElementById("fnameErr").innerHTML = "Please fill up the First name";
		flag = 1;
	}

	if (pForm.lname.value === ""||pForm.lname.value === null) {
		document.getElementById("lnameErr").innerHTML = "Please fill up the Last Name";
		flag = 1;
	}
	if (pForm.age.value === "" ||pForm.age.value === null ) {
		document.getElementById("ageErr").innerHTML = "Please fill up the age";
		flag = 1;
	}

	if (pForm.gender.value === ""||pForm.gender.value === null) {
		document.getElementById("genderErr").innerHTML = "Please select the gender";
		flag = 1;
	}
	if (pForm.email.value === "" ||pForm.email.value === null ) {
		document.getElementById("emailErr").innerHTML = "Please fill up the email";
		flag = 1;
	}

	if (pForm.mobile.value === ""||pForm.mobile.value === null) {
		document.getElementById("mobileErr").innerHTML = "Please fill up the mobile no";
		flag = 1;
	}
	if (pForm.address.value === "" ||pForm.address.value === null ) {
		document.getElementById("addrErr").innerHTML = "Please fill up the address";
		flag = 1;
	}

	if (pForm.bloodGroup.value === ""||pForm.bloodGroup.value === null) {
		document.getElementById("bloodErr").innerHTML = "Please select the Blood Group";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;




}