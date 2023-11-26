function editProfile() {
    let firstname = document.getElementById("Firstname").value;
    let lastname = document.getElementById("Lastname").value;
    let email = document.getElementById("Email").value;
    let mobile = document.getElementById("Mobile").value;
  


    let uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let lowercase = "abcdefghijklmnopqrstuvwxyz";
    let numbers = "0123456789";
    let validPrefixes = ['017', '016', '018', '015', '019', '013'];
    let alphabets = uppercase + lowercase;

    // Check if all fields are filled
    if (!firstname || !lastname || !email || !mobile ) {
        alert("All fields must be filled.");
        return false;
    }

    // Validate First Name
    if (uppercase.indexOf(firstname.charAt(0)) === -1) {
        alert("First Name should start with a capital letter.");
        return false;
    }
    for (let i = 0; i < firstname.length; i++) {
        if (alphabets.indexOf(firstname[i]) === -1) {
            alert("First Name should contain only alphabetic characters.");
            return false;
        }
    }

    // Validate Last Name
    if (uppercase.indexOf(lastname.charAt(0)) === -1) {
        alert("Last Name should start with a capital letter.");
        return false;
    }
    for (let i = 0; i < lastname.length; i++) {
        if (alphabets.indexOf(lastname[i]) === -1) {
            alert("Last Name should contain only alphabetic characters.");
            return false;
        }
    }

    

    // Validate Email
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        alert("Email should include '@' and '.' symbols.");
        return false;
    }

    // Validate Mobile Number
    if (mobile.length !== 11 || !validPrefixes.includes(mobile.substring(0, 3))) {
        alert("Invalid mobile number. It should be 11 digits long and start with '017', '016', '018', '015', '019', '013'.");
        return false;
    }
    for (let i = 0; i < mobile.length; i++) {
        if (numbers.indexOf(mobile[i]) === -1) {
            alert("Mobile number should contain only numbers.");
            return false;
        }
    }


    return true;

}




function changePassword() {
    
    let password = document.getElementById("Password").value;
    let newpassword = document.getElementById("NewPassword").value;
    let conpassword = document.getElementById("ConPassword").value;
    

    let uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let lowercase = "abcdefghijklmnopqrstuvwxyz";
    let numbers = "0123456789";
    let specialCharacters = "!@#$%^&*()_+";

    // Check if all fields are filled
    if (!password || !conpassword || !newpassword) {
        alert("All fields must be filled.");
        return false;
    }

    
    // Validate Password
    let hasUppercase = false, hasLowercase = false, hasNumber = false, hasSpecial = false;
    if (newpassword.length < 6) {
        alert("Password should be at least 6 characters.");
        return false;
    }
    for (let i = 0; i < newpassword.length; i++) {
        let char = newpassword[i];
        if (uppercase.indexOf(char) !== -1) hasUppercase = true;
        if (lowercase.indexOf(char) !== -1) hasLowercase = true;
        if (numbers.indexOf(char) !== -1) hasNumber = true;
        if (specialCharacters.indexOf(char) !== -1) hasSpecial = true;
    }
    if (!hasUppercase || !hasLowercase || !hasNumber || !hasSpecial) {
        alert("Password must include uppercase, lowercase, number, and special character.");
        return false;
    }

    // Check Password Confirmation
    if (newpassword !== conpassword) {
        alert("Passwords do not match.");
        return false;
    }


    return true;

}


function showPassword() {
    let passwordInput = document.getElementById("Password");
    let newpasswordInput = document.getElementById("NewPassword");
    let conpasswordInput = document.getElementById("ConPassword");
    if (passwordInput.type === "password" ) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }

    if (conpasswordInput.type === "password") {
        conpasswordInput.type = "text";
    } else {
        conpasswordInput.type = "password";
    }

    if (newpasswordInput.type === "password") {
        newpasswordInput.type = "text";
    } else {
        newpasswordInput.type = "password";
    }

}
