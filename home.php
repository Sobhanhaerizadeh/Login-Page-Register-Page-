<?php
    // Home Page

    require_once("dbconfig.php");
    if (isset($_POST['button-submit']))
    {
        $name = $_POST['input-name'];
        $name = htmlentities($name);
        $password = $_POST['input-password'];
        $password = htmlentities($password);
        $passwordHash = hash('sha256' , $password);
        $sql = "SELECT `name` , `password` FROM `users` WHERE `name` = '$name' AND `password` = '$passwordHash'; ";
        $db = mysqli_query($connect , $sql);
        if (mysqli_num_rows($db))
        {
           echo "<font color='green' size='6'> Welcome ".($name). "<br>";
           $cookieName = "login-authentication"; // Cookie Name 
           $cookieValue = $name.$passwordHash; // Cookie Value 
           setCookie($cookieName , $cookieValue, time() + 180 , "/"); // For 3 min you can enter home page
        }
        else // Wrong username or password
        {
            echo "<script> alert('Your name or password is incorrect!'); </script>";
            echo "<script> window.location = 'index.php' </script>";
        }
    }

    else{
        if (!isset($_COOKIE['login-authentication'])) // User without cookie
        {
            header('location:index.php');
        }
        else if (isset($_COOKIE['login-authentication'])) // User with cookie
        {
            echo "Welcome Again !";
        }
    }





?>