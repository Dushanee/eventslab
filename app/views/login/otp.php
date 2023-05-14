<?php
//  var_dump($_SESSION['email']);


if (isset($data['error'])) {

  if (($data['error'] == 0)) {
  } else {
?>
    <div class="alert">
      <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
      Incorrect OTP
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
} else {
}


?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<script>
      setTimeout(function(){
        window.location.href = "<?php echo BASEURL ?>/login/reset";
      }, 30000); // 30 seconds
    </script>
  <title>Reset Password</title>
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
            <p class="header-text">Enter reset code</p>
          </td>
        </tr>
        <div class="form-body">
          <tr>
            <td>
            <div class="sub-text">One Time Password has Sent to <?php 
          $email = $_SESSION['email'];
          $maskedEmail = substr($email, 0, 3) . str_repeat('*', strlen($email) - 3 - 10) . substr($email, -10);
          echo $maskedEmail; 
          ?>
          <p class="sub-text-para">Your OTP will Expire in 30 Seconds</p>
          </div>
              
    
            </td>
          </tr>
          <tr>
            <form name="myForm" action="<?php echo BASEURL ?>/login/checkOtp"  method="post">
              <td class="label-td">
                <label class="form-label">Reset Code: </label>
              </td>
          </tr>
          <tr>
            <td class="label-td">
              <input type="text" name="code" placeholder="Enter Reset Code" class="input-text" required>
            </td>
          </tr>
          <tr>
            <td>
              <button type="submit" value="submit" class="login-btn btn-primary btn">Verify</button>
            </td>
          </tr>
</form>
        </div>
        <tr>
          <td>
            <br>
            <label for="" class="sub-text" style="font-weight: 280;">Go back to </label><a href="<?php echo BASEURL ?>/login" class="hover-link1 non-style-link">Login</a>

            <br><br><br>
          </td>
        </tr>
        </form>
      </table>
    </div>
  </center>
</body>

</html>