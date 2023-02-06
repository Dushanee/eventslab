<!-- 
<script>
    function validateForm() {
        let x = document.forms["myForm"]["username"].value;
        let y = document.forms["myForm"]["password"].value;
        if (x == "") {
            alert("Username must be filled out");
            return false;
        }
        if (y == "") {
            alert("Password must be filled out");
            return false;
        }
    }
</script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/login.css">

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Admin Login</span></div>
            <form name="myForm" action="<?php echo BASEURL ?>/login/adminLogin" onsubmit="return validateForm()" method="post">
                <div class="row"> 
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>


                <div class="row button">
                    <button type="submit" value="login">Login </button>
                </div>

            </form>
        </div>
    </div>

</body>


</html> -->



 <link rel="stylesheet" href="<?php echo BASEURL ?>/css/animations.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/css/login.css">







<body>

    <center>
        <div class="container">
            <table border="0" style="margin: 0;padding: 0;width: 60%;">
                <tr>
                    <td>
                        <p class="header-text">Welcome Back!</p>
                    </td>
                </tr>
                <div class="form-body">
                    <tr>
                        <td>
                            <p class="sub-text">Login with your details to continue</p>
                        </td>
                    </tr>
                    <tr>
                  <form name="myForm" action="<?php echo BASEURL ?>/login/adminLogin" onsubmit="return validateForm()" method="post">
                            <td class="label-td">
                                <label for="useremail" class="form-label">Email: </label>
                            </td>
                    </tr>
                    <tr>
                        <td class="label-td">
                        <input type="text" name="email" placeholder="Username" class="input-text">
                        </td>
                    </tr>
                    <tr
                        <td class="label-td">
                            <label for="userpassword" class="form-label">Password: </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="label-td">
                        <input type="password" name="password" placeholder="Password" class="input-text">
                        </td>
                    </tr>



                    <tr>
                        <td>
                                  <button type="submit" value="login" class="login-btn btn-primary btn">Login </button>
                        </td>
                    </tr>
                </div>
                <tr>
                    <td>
                        <br>
                        <label for="" class="sub-text" style="font-weight: 280;">Forgot your password&#63; </label>
                        <a href="signup.php" class="hover-link1 non-style-link">Reset</a>
                        <br><br><br>
                    </td>
                </tr>




                </form>
            </table>

        </div>
    </center>
</body>

</html>