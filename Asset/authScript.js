function userSignUp() {
    let firstname = document.getElementById("Firstname").value;
    let lastname = document.getElementById("Lastname").value;
    let username = document.getElementById("Username").value;
    let email = document.getElementById("Email").value;
    let mobile = document.getElementById("Mobile").value;
    let dob = document.getElementById("DOB").value;
    let password = document.getElementById("Password").value;
    let conpassword = document.getElementById("ConPassword").value;
    let male = document.getElementById("Male");
    let female = document.getElementById("Female");
    let others = document.getElementById("Others");
    let terms = document.getElementById("Terms&Condition").checked;

    let gender = male.checked || female.checked || others.checked;



    let uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let lowercase = "abcdefghijklmnopqrstuvwxyz";
    let numbers = "0123456789";
    let specialCharacters = "!@#$%^&*()_+";
    let validPrefixes = ['017', '016', '018', '015', '019', '013'];
    let validUsernameChars = "abcdefghijklmnopqrstuvwxyz0123456789_";
    let alphabets = uppercase + lowercase;

    if (!firstname || !lastname || !username || !email || !password || !conpassword || !mobile || !dob || !gender) {
        alert("All fields must be filled.");
        return false;
    }
    

    // Validate First Name
    if (uppercase.indexOf(firstname.charAt(0)) === -1) {
        document.getElementById("fname").innerHTML="First Name should start with a capital letter.";
        return false;
    }
    for (let i = 0; i < firstname.length; i++) {
        if (alphabets.indexOf(firstname[i]) === -1) {
            document.getElementById("fname").innerHTML="First Name should contain only alphabetic characters.";
            return false;
        }
    }

    // Validate Last Name
    if (uppercase.indexOf(lastname.charAt(0)) === -1) {
        document.getElementById("lname").innerHTML="Last Name should start with a capital letter.";
        return false;
    }
    for (let i = 0; i < lastname.length; i++) {
        if (alphabets.indexOf(lastname[i]) === -1) {
            document.getElementById("lname").innerHTML="Last Name should contain only alphabetic characters.";
            return false;
        }
    }

    // Validate Username
    if (username.length < 6) {
        document.getElementById("uid").innerHTML="Username should be at least 6 characters long.";
        return false;
    }
    for (let i = 0; i < username.length; i++) {
        if (validUsernameChars.indexOf(username[i]) === -1) {
            document.getElementById("uid").innerHTML="Username should contain only lowercase letters, numbers, and underscores.";
            return false;
        }
    }

    // Validate Email
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        document.getElementById("eid").innerHTML="Email should include '@' and '.' symbols.";
        return false;
    }

    // Validate Mobile Number
    if (mobile.length !== 11 || !validPrefixes.includes(mobile.substring(0, 3))) {
        document.getElementById("m").innerHTML="Invalid mobile number. It should be 11 digits long and start with '017', '016', '018', '015', '019', '013'.";
        return false;
    }
    for (let i = 0; i < mobile.length; i++) {
        if (numbers.indexOf(mobile[i]) === -1) {
            document.getElementById("m").innerHTML="Mobile number should contain only numbers.";
            return false;
        }
    }

    // Validate Password
    let hasUppercase = false, hasLowercase = false, hasNumber = false, hasSpecial = false;
    if (password.length < 6) {
        document.getElementById("pass").innerHTML="Password should be at least 6 characters.";
        return false;
    }
    for (let i = 0; i < password.length; i++) {
        let char = password[i];
        if (uppercase.indexOf(char) !== -1) hasUppercase = true;
        if (lowercase.indexOf(char) !== -1) hasLowercase = true;
        if (numbers.indexOf(char) !== -1) hasNumber = true;
        if (specialCharacters.indexOf(char) !== -1) hasSpecial = true;
    }
    if (!hasUppercase || !hasLowercase || !hasNumber || !hasSpecial) {
        document.getElementById("pass").innerHTML="Password must include uppercase, lowercase, number, and special character.";
        return false;
    }

    // Check Password Confirmation
    if (password !== conpassword) {
        document.getElementById("cpass").innerHTML="Passwords do not match.";
        return false;
    }

    if (!terms) {
        alert("Must agree with terms and conditions")
        return false;
    }

    return true;

}



function ownerSignUp() {
    let firstname = document.getElementById("Firstname").value;
    let lastname = document.getElementById("Lastname").value;
    let username = document.getElementById("Username").value;
    let email = document.getElementById("Email").value;
    let mobile = document.getElementById("Mobile").value;
    let dob = document.getElementById("DOB").value;
    let password = document.getElementById("Password").value;
    let conpassword = document.getElementById("ConPassword").value;
    let male = document.getElementById("Male");
    let female = document.getElementById("Female");
    let others = document.getElementById("Others");
    let hotel = document.getElementById("Hotel");
    let car = document.getElementById("Car");
    let terms = document.getElementById("Terms&Condition").checked;

    let gender = male.checked || female.checked || others.checked;
    let service = hotel.checked || car.checked;


    let uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let lowercase = "abcdefghijklmnopqrstuvwxyz";
    let numbers = "0123456789";
    let specialCharacters = "!@#$%^&*()_+";
    let validPrefixes = ['017', '016', '018', '015', '019', '013'];
    let validUsernameChars = "abcdefghijklmnopqrstuvwxyz0123456789_";
    let alphabets = uppercase + lowercase;

    // Check if all fields are filled
    if (!firstname || !lastname || !username || !email || !password || !conpassword || !mobile || !dob || !gender || !service) {
        alert("All fields must be filled.");
        return false;
    }

    // Validate First Name
    if (uppercase.indexOf(firstname.charAt(0)) === -1) {
        document.getElementById("fname").innerHTML="First Name should start with a capital letter.";
        return false;
    }
    for (let i = 0; i < firstname.length; i++) {
        if (alphabets.indexOf(firstname[i]) === -1) {
            document.getElementById("fname").innerHTML="First Name should contain only alphabetic characters.";
            return false;
        }
    }

    // Validate Last Name
    if (uppercase.indexOf(lastname.charAt(0)) === -1) {
        document.getElementById("lname").innerHTML="Last Name should start with a capital letter.";
        return false;
    }
    for (let i = 0; i < lastname.length; i++) {
        if (alphabets.indexOf(lastname[i]) === -1) {
            document.getElementById("lname").innerHTML="Last Name should contain only alphabetic characters.";
            return false;
        }
    }

    // Validate Username
    if (username.length < 6) {
        document.getElementById("uid").innerHTML="Username should be at least 6 characters long.";
        return false;
    }
    for (let i = 0; i < username.length; i++) {
        if (validUsernameChars.indexOf(username[i]) === -1) {
            document.getElementById("uid").innerHTML="Username should contain only lowercase letters, numbers, and underscores.";
            return false;
        }
    }

    // Validate Email
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        document.getElementById("eid").innerHTML="Email should include '@' and '.' symbols.";
        return false;
    }

    // Validate Mobile Number
    if (mobile.length !== 11 || !validPrefixes.includes(mobile.substring(0, 3))) {
        document.getElementById("mobile").innerHTML="Invalid mobile number. It should be 11 digits long and start with '017', '016', '018', '015', '019', '013'.";
        return false;
    }
    for (let i = 0; i < mobile.length; i++) {
        if (numbers.indexOf(mobile[i]) === -1) {
            document.getElementById("mobile").innerHTML="Mobile number should contain only numbers.";
            return false;
        }
    }

    // Validate Password
    let hasUppercase = false, hasLowercase = false, hasNumber = false, hasSpecial = false;
    if (password.length < 6) {
        document.getElementById("pass").innerHTML="Password should be at least 6 characters.";
        return false;
    }
    for (let i = 0; i < password.length; i++) {
        let char = password[i];
        if (uppercase.indexOf(char) !== -1) hasUppercase = true;
        if (lowercase.indexOf(char) !== -1) hasLowercase = true;
        if (numbers.indexOf(char) !== -1) hasNumber = true;
        if (specialCharacters.indexOf(char) !== -1) hasSpecial = true;
    }
    if (!hasUppercase || !hasLowercase || !hasNumber || !hasSpecial) {
        document.getElementById("pass").innerHTML="Password must include uppercase, lowercase, number, and special character.";
        return false;
    }

    // Check Password Confirmation
    if (password !== conpassword) {
        document.getElementById("cpass").innerHTML="Passwords do not match.";
        return false;
    }

    if (!terms) {
        alert("Must agree with terms and conditions")
        return false;
    }

    return true;
}




function showPassword() {
    let passwordInput = document.getElementById("Password");
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

}

function checkAvailability() {
    let email = document.getElementById('Email').value;
    let username = document.getElementById('Username').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/username&emailcheck.php', true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let response = JSON.parse(this.responseText);
                document.getElementById('eid').innerHTML = response.emailAvailability || '';
                document.getElementById('uid').innerHTML = response.usernameAvailability || '';
                
            } else {
                console.error('HTTP error:', this.status);
            }
        }
    };

    xhttp.send('email=' + email + '&username=' + username);
}

function checkUsername() {
    let username = document.getElementById('Username').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/usernamecheck.php', true); 
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                document.getElementById('message').innerHTML =this.responseText;
                
            } else {
                console.error('HTTP error:', this.status);
            }
        }
    };

    xhttp.send('username=' + username);
}


function checkCredentials() {
    let username = document.getElementById('Username').value;
    let password = document.getElementById('Password').value;
    let data = {
        'username': username,
        'password': password
    };

    let input =JSON.stringify(data);

    if (username === "" || password === "") {
        document.getElementById('message').innerHTML = "Username and Password must not be empty!";
        return false;
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/credentialcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                let response = JSON.parse(this.responseText);
                alert(response.message);   
            } else {
                console.error('HTTP error:', this.status);
            }
        }
    };

    xhttp.send('input='+input);
}





