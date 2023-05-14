<?php 



if(isset($data['error'])) { 

  if(($data['error'] == 0)){
    ?>
    <div class="alert-success">
      <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
    Your Password is Successfully Changed
    </div>
    <script>
      var alertBox = document.querySelector('.alert');
      alertBox.classList.add('show');
      setTimeout(function() {
        alertBox.classList.add('hide');
      }, 5000); // 5000 milliseconds = 5 seconds
      function dismissAlert(button) {
        var alertBox = button.parentElement;
        alertBox.classList.add('hide');
        setTimeout(function() {
          alertBox.remove();
        }, 500); // 500 milliseconds = 0.5 seconds
      }
    </script>
    <?php
  // do something

    

  }

  else if(($data['error'] == 1)) {
    ?>
    <div class="alert">
      <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
    Unsuccessful login
    </div>
    <script>
      var alertBox = document.querySelector('.alert');
      alertBox.classList.add('show');
      setTimeout(function() {
        alertBox.classList.add('hide');
      }, 5000); // 5000 milliseconds = 5 seconds
      function dismissAlert(button) {
        var alertBox = button.parentElement;
        alertBox.classList.add('hide');
        setTimeout(function() {
          alertBox.remove();
        }, 500); // 500 milliseconds = 0.5 seconds
      }
    </script>
    <?php
  // do something
} 


}else {

}
   

?>

<html> 

<head>
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/animations.css">
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/main.css">
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/login.css">



</head>
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
                                <label for="email" class="form-label">Email: </label>
                            </td>
                    </tr>
                    <tr>
                        <td class="label-td">
                            <input type="text" name="email" placeholder="email" class="input-text" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td">
                            <label for="password" class="form-label">Password: </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="label-td">
                            <input type="password" name="password" placeholder="Password" class="input-text"  required>
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
                        <a href="<?php echo BASEURL ?>/login/reset" class="hover-link1 non-style-link">Reset</a>
                        <br><br><br>
                    </td>
                </tr>




                </form>
            </table>

        </div>
    </center>

 
    
</body>


</html>

