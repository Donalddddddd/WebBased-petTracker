
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    justify-content: space-around;

    background:  url("image/frontpage3.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

}
.form-box{
    position: relative;
    width: 400px;
    height: auto;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
    margin-top: 30px;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
::placeholder {
  color: #fff;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #fff;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px ;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}

.forget label input{
    margin-right: 3px;

}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}
button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}
.login-register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 30px;
}
.login-register p a{
    color: #00FFFF;
    text-decoration: none;
    font-weight: 600;
}
.login-register a{
    margin-left: 5px;
}
.login-register p a:hover{
    text-decoration: underline;
}
</style>

<body>
    <section class="login">
        <div class="form-box">
            <div class="form-value">
                <form action="admin.inc.php" method="post">
                    <h2>Admin</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="email" name="uid" placeholder="Email">
                        <label for="email"></label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="pwd" placeholder="Password">
                        <label for="password"></label>
                    </div>

                    <button type="submit" name="submit" id="submit" onclick="login()">Log in</button>
                    <div class="login-register">

                    </div>
                </form>
            </div>
        </div>

        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Verify OTP</h2>
                    <div class="inputbox">
                      <ion-icon name="checkmark-done-outline"></ion-icon>
                        <input type="text" id="otp" name="otp" required>
                        <label for="" placeholder="OTP">OTP</label>
                    </div>
                    <button type="button" onclick="sendOTP()">Send OTP</button>
                    <button type="button" name="button" onclick="verifyOTP()" style="margin-top: 10px;">Verify OTP</button>
                    <div class="login-register">

                    </div>
                </form>
            </div>
        </div>

    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>

    let otp;
    document.getElementById("submit").disabled = true;

      function sendOTP() {
      	// Get the email address and generate a random 6-digit OTP code
      	const email = document.getElementById('email').value;
      	otp = Math.floor(100000 + Math.random() * 900000);

      	// Show the OTP code in an alert
      	alert(`Your OTP code is ${otp}.`);

      	// Enable the OTP input field

      }

      function verifyOTP() {
      	// Get the OTP code from the input field
      	const inputOTP = document.getElementById('otp').value;

      	// Validate the OTP code
      	if (inputOTP === "") {
      		alert("Please enter the OTP code.");
      		return;
      	}

      	if (inputOTP !== otp.toString()) {
      		alert("Invalid OTP code.");
      		return;
      	}

      	alert("OTP code verified successfully!");

      	// Enable the login button
      	document.getElementById('submit').removeAttribute('disabled');
      }

      function login() {
      	// Get the username, password, email, and OTP code

      	const inputOTP = document.getElementById('otp').value;

      	// Validate the username, password, email, and OTP code
      	if (inputOTP === "") {
      		alert("Please Enter the OTP-Code Before you login.");
      		return;
      	}

      	if (inputOTP !== otp.toString()) {
      		alert("Please verify the OTP code.");
      		return;
      	}

      	// TODO: Validate the username and password against the database
      	alert("Login successful!");
      }

    </script>
</body>
</html>
