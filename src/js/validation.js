document.getElementById("registerForm").addEventListener("submit", e => {
    e.preventDefault();
    var name = document.getElementById("registerName").value;
    var email = document.getElementById("registerEmail").value;
    var password = document.getElementById("registerPassword").value;
    var cpassword = document.getElementById("registerConfirmPassword").value;
    var nameError = document.getElementsByClassName("name-error")[0];
    var emailError = document.getElementsByClassName("email-error")[0];
    var passwordError = document.getElementsByClassName("password-error")[0];
    var cpasswordError = document.getElementsByClassName("cpassword-error")[0];
    
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(name == ""){
        nameError.innerHTML = "Please enter your name.";
        nameError.style.color = "red";
        nameError.style.fontSize = "12px";
    }
    if(email == "" || !emailRegex.test(email)){
        emailError.innerHTML = "Please enter a valid email.";
        emailError.style.color = "red";
        emailError.style.fontSize = "12px";
    }
    if(password == "" || password.length < 8 || password.length > 22 ){
        passwordError.innerHTML = "Password should be between 8 and 22 characters.";
        passwordError.style.color = "red";
        passwordError.style.fontSize = "12px";
    }
    if(cpassword == ""){
        cpasswordError.innerHTML = "Please confirm your password.";
        cpasswordError.style.color = "red";
        cpasswordError.style.fontSize = "12px";
    }
    if(password != cpassword){
        cpasswordError.innerHTML = "Passwords do not match.";
        cpasswordError.style.color = "red";
        cpasswordError.style.fontSize = "12px";
    }
    if(name != "" && emailRegex.test(email) && password.length >= 8 && password.length <= 22 && password != "" && cpassword != "" && password == cpassword){
        document.getElementById("registerForm").submit();
    }
 });
 