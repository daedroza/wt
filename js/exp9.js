function validateForm() {
    var x = document.forms["myForm"]["username"].value;
	var y = document.forms["myForm"]["pass"].value;
	var z = document.forms["myForm"]["mobileno"].value;
	var regex = /^(?=.*[a-z])(?=.*[A-Z])$/;
	var n = z.length;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }else 
    if (y == "") {
		alert("Password must be filled out");
		return false;
	}else

	if (z == "") {
		alert("Mobile Number must be filled out");
		return false;
	}else 
	if(x==y){
		alert("Username and Password should be different");
		return false;
	}else if((n<10)||(n>10)){
		alert("Mobile number should be of 10 digits");
		return false;
	}else if(y.value.match(regex)){
		alert("The password should contain atleast 1 uppercase and 1 lowercase character");
		return false;
	}
}