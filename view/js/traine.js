function validate_event(pForm) {
	let flag = 0;

	if (pForm.edate.value === "" ||pForm.edate.value === null ) {
		document.getElementById("edateError").innerHTML = "Please fill up the event Date";
		flag = 1;
	}

	if (pForm.etime.value === ""||pForm.etime.value === null) {
		document.getElementById("etimeError").innerHTML = "Please fill up the Event Time";
		flag = 1;
	}
	if (pForm.roomNo.value === ""||pForm.roomNo.value === null) {
		document.getElementById("locError").innerHTML = "Please fill up the room No";
		flag = 1;
	}
	if (pForm.traine.value === ""||pForm.traine.value === null) {
		document.getElementById("locError").innerHTML = "Please fill up the traine";
		flag = 1;
	}

	if (flag === 0) {
		return true;
	}
	return false;
}