function validate() {      
    if (document.signup.username.value == "" || document.signup.username.value.length<3 ) {
        alert( "Please Choose username of atleast 3 letter!" );
        document.signup.username.focus() ;
        return false;
    }
    if (document.signup.email.value == "" ) {
       alert( "Please provide your Email!" );
       document.signup.email.focus() ;
       return false;
    }

    var email = document.signup.email.value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        alert("Please enter valid email ID")
        document.signup.email.focus() ;
        return false;
    }
    
    var paswd1 = document.signup.password1.value;
    var paswd2 = document.signup.password2.value;
    if(paswd1 === ""){
        alert("Please enter password!");
        document.signup.password1.focus();
        return false;      
    }
    if(paswd1!=paswd2){
        alert("Password does not match.Enter same password.");
        document.signup.password2.focus();
        return false;
    }
    if(!document.signup.tnc.checked)
    {
        alert("You must agree to the terms first.");
        return false;
    }
    return true;
}

function login() {
    if(document.signin.username.value ==="" || document.signin.username.value.length<3){
        alert("Enter valid username");
        document.signin.username.focus();
        return false;
    }
    if (document.signin.password.value === ""){
        alert("Enter correct password!");
        document.signin.password.focus();
        return false;
    }
    return true;
}