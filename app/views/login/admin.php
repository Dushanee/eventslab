

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/login.css">
   <body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Admin Login</span></div>
            <form action="<?php echo BASEURL ?>/login/adminLogin" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text"  name="username" placeholder="Username" required>
                </div>
				<div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
              

                <div class="row button">
                    <button type="submit" value="login">Login </button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>