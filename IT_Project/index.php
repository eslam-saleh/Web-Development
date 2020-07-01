<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mobilano</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <script src="mainJS.js" language="javascript"></script>
    <script src="jquery-3.3.1.min.js" language="javascript"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="login_wrap">
        <form id="sub" class="login_html" name="signUpForm" method="post" onsubmit="return validate();">
            <input id="tab_1" type="radio" name="tab" class="sign_in" checked><label for="tab_1" class="tab">Sign In</label>
            <input id="tab_2" type="radio" name="tab" class="sign_up"><label for="tab_2" class="tab">Sign Up</label>
            <div class="login_form">
                <div class="sign_in_htm">
                    <div class="group">
                        <label for="user" class="label">Email \ Phone Number</label>
                        <input name="E_P" id="userr" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input name="passLogIn" id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <button type="submit" id="butt" class="button" value="Submit">Sign In </button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot_lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                <div class="sign_up_htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input name="user" id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input name="email" id="email" type="email" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Phone Number</label>
                        <input name="phone" id="phone" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Zip Code</label>
                        <input name="zip" id="zip" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input name="pass1" id="pass1" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass2" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        Admin<input type="radio" name="type" value="admin">
                        User<input type="radio" name="type" value="user">
                    </div>
                    <div class="group">
                        <button type="submit" id="button" class="button" value="Submit">Sign Up </button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot_lnk">
                        <label for="tab_1">Already Member?</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php 
include 'signUp.php'; 
?>
