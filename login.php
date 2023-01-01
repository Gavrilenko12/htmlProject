
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css" />
</head>
<body>

<form action="auth.php" method="post" name="form2">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill to login.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>

    <button type="submit" class="registerbtn" >Login</button>
  </div>
  <div class="container signin">
    <p>Dont you have your account?<a href="registration.html">Register in</a>.</p>
  </div>
</form>
<div class="container signin">
  <div id="child"><p class="larger">Do you need help? <a href="http://localhost:8080/Newtopic3.html">Help</a></p></div>
</div>


<script src="login.js"></script>
</body>
</html>
