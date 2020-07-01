
function validate() {

    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var phone = document.getElementById("phone").value;
    //var age = document.adminform.age.value;

    if (pass1 != pass2) {
        alert("passwords don't match");
    } else if (isNaN(phone)) {
          alert("phone must be a number");
    }
    //  else if(isNaN(age)){
    //      alert("age must be a number");
    //  }
    else {
 // document.signUpForm.action = "signUp.php";
    //    document.getElementById("f").action = "signUp.php"; //Setting form action to "success.php" page


    }
}
