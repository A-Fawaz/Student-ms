
        function validatePassword() {
	var currentPassword, newPassword, confirmPassword, output = true;

	currentPassword = document.frmChange.currentPassword;
	newPassword = document.frmChange.newPassword;
	confirmPassword = document.frmChange.confirmPassword;

	if (!currentPassword.value) {
		currentPassword.focus();
		document.getElementById("currentPassword").innerHTML = "Please Enter The Password ";
		output = false;
	}
	else if (!newPassword.value) {
		newPassword.focus();
		document.getElementById("newPassword").innerHTML = "Please Enter The New Password ";
		output = false;
	}
	else if (!confirmPassword.value) {
		confirmPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "Please Confirm The Password ";
		output = false;
	}
	if (newPassword.value != confirmPassword.value) {
		newPassword.value = "";
		confirmPassword.value = "";
		newPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "Please Enter The Same Password ";
		output = false;
	}
	return output;
}
    