<!doctype html>
<html>
    <head>
        <title>csm Login</title>
        <link rel="stylesheet" href="../front/css/loginFront.css">
    </head>
    <body>
        <div class="form-cage">
            <div class="topic">
                <h2>Login</h2>
            </div>
            <div class="tocenterthispest">
            <form class="data-cage" action="./home.php" method="POST">
            
                <div class="email-cage">
                    <label class="text-label">Email</label> <!--change into email later-->
                    <input type="text" class="input" name="email" />
                    <label class="text-label">Password</label> <!--change into password later-->
                    <input type="password" class="input" name="password" />
                 </div><br />
                 <div class="btn">
                    <input type="submit" name="login" class="login-btn" value="Login">
                 </div>
            </form>
            </div><br />
            <div class="links">
                <div class="l-1">
                    <a href="forgotpwd.php" class="link">Forgot Password</a>
                </div>
                <div class="l-1">
                    <a href="reset.php" class="link">Reset Password</a>
                </div><br />
            </div>
        </div>
    </body>
</html>