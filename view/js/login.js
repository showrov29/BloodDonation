function validate_login(pForm) {

	var uname=pForm.username.value;
	var pas=pForm.password.value;
	var srt=uname+"&"+pas;

	let flag = 0;

	if (pForm.username.value === "") {
		document.getElementById("unameErrorMsg").innerHTML = "Please fill up the username";
		flag = 1;
	}

	if (pForm.password.value === "") {
		document.getElementById("passwordErrorMsg").innerHTML = "Please fill up the password";
		flag = 1;
	}



	if (flag === 0) {

	// const xhttp = new XMLHttpRequest();
	// xhttp.onload = function() {
	//   //document.getElementById("demo").innerHTML = this.responseText;
	// }
	// xhttp.open("POST", "loginAxtion.php");
	// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// xhttp.send(str);



		return true;
	}
	return false;
}




