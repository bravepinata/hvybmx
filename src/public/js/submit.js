// show a message with a type of the input
function showMessage(input, message, type) {
	// get the small element and set the message
	const msg = input.parentNode.querySelector("small");
	msg.innerText = message;
	
    // update the class for the input
	// input.className = type ? "form-control text-success" : "form-control text-danger";

    // update the field border
    input.style.border = type ? 'solid 1px green' : 'solid 1px red';

	return type;
}

function showError(input, message) {
	return showMessage(input, message, false);
}

function showSuccess(input) {
	return showMessage(input, "", true);
}

function hasValue(input, message) {
	if (input.value.trim() === "") {
		return showError(input, message);
	}
	return showSuccess(input);
}

function validateCaptcha(input, message) {
    switch (input.value.toLowerCase().trim())
    {
        case 'spring':
        case 'acapulco':
        case 'jamaica':
        case 'cancun':
        case 'bahamas':
            return showSuccess(input);

        default:
            return showError(input, message);
    }
}

function validateEmail(input, requiredMsg, invalidMsg) {
	// check if the value is not empty
	if (!hasValue(input, requiredMsg)) {
		return false;
	}
	// validate email format
	const emailRegex =
		/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	const email = input.value.trim();
	if (!emailRegex.test(email)) {
		return showError(input, invalidMsg);
	}
	return true;
}

const form = document.querySelector("#signup");

const FNAME_REQUIRED = "Please enter your first name.";
const LNAME_REQUIRED = "Please enter your last name.";
const EMAIL_REQUIRED = "Please enter your email.";
const EMAIL_INVALID = "Please enter a correct email address format.";
const PHONE_REQUIRED = "Please enter a phone number.";
const MESSAGE_REQUIRED = "Do You have a destination in mind?";
const CAPTCHA_REQUIRED = "Please enter the text from the image.";

function sendData () 
{
    let fnameValid = hasValue(form.elements["fname"], FNAME_REQUIRED);
	let lnameValid = hasValue(form.elements["lname"], LNAME_REQUIRED);
	let emailValid = validateEmail(form.elements["email"], EMAIL_REQUIRED, EMAIL_INVALID);
    let phoneValid = hasValue(form.elements["phone"], PHONE_REQUIRED);
    let messageValid = hasValue(form.elements["message"], MESSAGE_REQUIRED);
    let captchaValid = validateCaptcha(form.elements['txt_requestinfo_captcha'], CAPTCHA_REQUIRED);

	// if valid, submit the form.
	if (fnameValid && lnameValid && emailValid && phoneValid && messageValid && captchaValid) 
    {
        var data = new FormData();

        data.append("Fname", document.getElementById("fname").value);
        data.append("Lname", document.getElementById("lname").value);
        data.append("Email", document.getElementById("email").value);
        data.append("Mobile", document.getElementById("phone").value);
        data.append("Body", document.getElementById("message").value);

        fetch("https://www.ststravel.com/api/salesrep/request_info", {
            method: "POST",
            body: data
        });
    
        document.getElementById("fname").value = '';
        document.getElementById("lname").value = '';
        document.getElementById("email").value = '';
        document.getElementById("phone").value = '';
        document.getElementById("message").value = '';
        document.getElementById("txt_requestinfo_captcha").value = '';

        document.getElementById("submitButton").value = "Thank You! - We\'ll be in Contact Soon.";
        document.getElementById("submitButton").innerText = "Thank You! - We\'ll be in Contact Soon.";
        document.getElementById("submitButton").disabled = true;
        document.getElementById("submitButton").style.backgroundColor = "green";
	}

    // PREVENT FORM SUBMIT
    return false;
}