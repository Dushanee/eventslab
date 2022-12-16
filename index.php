<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <link rel = "stylesheet" type = "text/css" href = "./css/indexstyle.css" />
    </head>
    <body>
    <h2><b>Customer Support Management</b></h2>
    <div class = "container">
        <form action="login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p class = "error"><?php echo $_GET['error'];?></p>
           <?php } ?>
            <label class = "label-1">User Name</label>
            <input class = "input-1" type="text" name = "username" placeholder="enter your username">

            <label class = "label-2">Password</label>
            <input class = "input-2" type="password" name = "password" placeholder="enter your password">

            <button type="submit"><p class = "login"><b>Log In</b></p></button><br />
            <label class = link-1><a href="forgot.php" style = "text-decoration: none">forgot password?</a></label><br>
            <label class = "link-2"><a href="reset.php" style = "text-decoration: none">reset password</a></label>
        </form>
    </div>
    </body>
</html>
