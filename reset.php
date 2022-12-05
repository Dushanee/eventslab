<?php
    include "db_conn.php";

    if(isset($_POST['password_reset'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $token = x(rand());

        $check_email = "SELECT email FROM customersupport WHERE email = '$email' LIMIT 1";
        $check_email_run = mysqli_query($conn, $check_email);

        if(mysqli_num_rows($check_email_run) > 0) {
            $row = mysqli_fetch_array($check_email_run);
            $get_username = $row['username'];
            $get_email = $row['email'];
        }else {
            $_SESSION['status'] = "No Email Found";
            header("Location: password_reset.php");
            exit(0);
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Password reset</title>
        <link rel = "stylesheet" type = "text/css" href = "./css/resetstyle.css" />
    </head>
    <body>
        
        <div class = "container">
        <h2>Reset Password</h2>
        <form action="#" method="post">
            <label class = "label-1">Email</label>
            <input class = "input-1" type="text" name = "uname" placeholder="enter your email">

            <label class = "label-2">New password</label>
            <input class = "input-2" type="password" name = "password" placeholder="enter your new password">

            <label class = "label-3">Confirm new password</label>
            <input class = "input-3" type="password" name = "password" placeholder="re-enter your new password">

            <button type="submit"><p class = "login"><b>Reset Password</b></p></button><br />
            <label class = link-1><a href="index.php" style = "text-decoration: none">Go back to login</a></label>

        </form>
    </div>
    </body>
</html>