<?php
    // Sobhan Haerizadeh

    // Enjoy Your Life :)

?>

<?php 
    // Login Page

     if (isset($_COOKIE['login-authentication'])) // User with cookie
    {
        header('location:home.php');
    }

    require_once "dbconfig.php";
    if (isset($_POST['button-submit-reg'])){
        $nameReg = $_POST['input-name-reg'];
        $passwordReg = $_POST['input-password-reg'];
        $emailReg = $_POST['input-email-reg'];
        $passwordReg = hash('sha256' , $passwordReg);
        $sql = "INSERT INTO users (`name` , `password` , `email`) VALUES ('$nameReg' , '$passwordReg' , '$emailReg');";
        mysqli_query($connect, $sql);
    }
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/script.js"></script>
<title>Login Page</title>
</head>
<body>
<div class="container">
    <form class="form-login" action="home.php" method="POST">
    <label for="input-name">Nickname </label>
    <input type="text" id="input-name" name="input-name" class="form-control" required autofocus onkeypress="return name_put()" minlength="2" maxlength="19" /> <br/>
    <label for="input-password"> Password </label>
    <input type="password"  id="input-password" name="input-password" class="form-control" required onkeypress="return pass_put()" minlength="5" maxlength="29" /> <br/>
    <input type="submit" value="Login" class="btn btn-success" name="button-submit" />
    <input type="reset" value="Reset" class="btn btn-danger" /> <br/><br/>
    <a href="register.php">Don't have an account? Click to register  </a>
    </form>
</div>
</body>
</html>
