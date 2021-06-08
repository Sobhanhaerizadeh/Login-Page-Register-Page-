<?php
    // Connect To Database with MYSQLI Method
    $connect = @mysqli_connect("Localhost" , 'root' , '' , 'login_page');
    if (!$connect) // About error 
    {
        // echo (mysqli_connect_errno());  Display the Number of Error
        exit(mysqli_connect_error()); // Display Error
    }
?>