<!doctype html>
<html>
    <head>
        <title>Blog Manager Login</title>
        <link rel="stylesheet" href="./css/loginFront.css">
    </head>
    <body>
        <div class="form-cage">
            <div class="topic">
                <h2>Login</h2>
            </div>
            <div class="tocenterthispest">
            <form class="data-cage" action="../src/login-blogManager.php" method="POST">
            <?php if(isset($_GET['error'])) { ?>
                <p class = "error"><?php echo $_GET['error'];?></p>
           <?php } ?>

           <?php if(isset($_GET['cheer'])) { ?>
            <p class="cheer"><?php echo $_GET['cheer'];?></p>
           <?php } ?>
            
                <div class="email-cage">
                    <label class="text-label">Email</label> 
                    <input type="text" class="input" name="email" required /><br />
                    <label class="text-label">Password</label> 
                    <input type="password" class="input" name="password" required /><br />
                 </div><br />
                 <div class="btn">
                    <input type="submit" name="login" class="login-btn" value="Login">
                 </div>
            </form>
            </div><br />
            <div class="links">
                <div class="l-1">
                    <a href="../public/bm-forgotPassword.php" class="link">Forgot Password</a>
                </div>
                <div class="l-1">
                    <a href="../public/bm-resetPwd.php" class="link">Reset Password</a>
                </div><br />
            </div>
        </div>
    </body>
</html>