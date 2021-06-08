<?php
// Register Page (Insert in datbaase)
    require_once "dbconfig.php";
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css"/>
<title>Register Page</title>
</head>
<body>
<div class="container">
    <form class="form-login" action="index.php" method="POST">
    <label for="input-name">Nickname </label>
    <input type="text" id="input-name" name="input-name-reg" class="form-control" required autofocus onkeypress="return name_put()"/> <br/>
    <label for="input-password"> Password </label>
    <input type="password"  id="input-password" name="input-password-reg" class="form-control" required onkeypress="return pass_put()" /> <br/>
    <label for="input-email"> Email </label>
    <input type="email"  id="input-email" name="input-email-reg" class="form-control" onkeypress="return email_put()"/> <br/>
    <input type="submit" value="Register" class="btn btn-success" name="button-submit-reg" id="button-submit-reg" onclick="registerButton()" />
    <input type="reset" value="Reset" class="btn btn-danger" /> <br/><br/>
    <a href="index.php">Have an account? Click to login  </a>
    </form>
</div>
</body>
</html>