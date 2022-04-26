var item1 = document.getElementById("i1");
var item2 = document.getElementById("i2");
var item3 = document.getElementById("i3");

var amount1 = document.getElementById("in1");
var amount2 = document.getElementById("in2");
var amount3 = document.getElementById("in3");

var ship = document.getElementById("ship");

var username = document.getElementById("username");
var password = document.getElementById("password");

parseInt(amount1);
parseInt(amount2);
parseInt(amount3);

function reset() {
	item1.checked = false;
	item2.checked = false;
	item3.checked = false;
	amount1.value = "";
	amount2.value = "";
	amount3.value = "";
	ship.checked = false;
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validate() {
	/*if(item1.checked==false||item2.checked==false||item3.checked==false||amount1.value==""||amount2.value==""||amount3.value==""||ship.checked==false||password.value=="") {
		alert("All fields must be filled out!");
		return false;
	}
	if(validateEmail(username.value)==false) {
		alert("Username must be an email!");
		return false;
	}
	if(amount1.value<0||amount2.value<0||amount3.value<0||amount1.value%1 != 0 || amount2.value%1 != 0 || amount3.value%1 != 0) {
		alert("Amounts cannot be negative or be decimals!");
		return false;
	}
	if(Number.isInteger(amount1.value)==false || Number.isInteger(amount2.value)==false || Number.isInteger(amount3.value)==false) {
		alert("Amounts must be integers!");
		return false;
	}*/
}
