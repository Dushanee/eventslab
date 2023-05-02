<!DOCTYPE html>
<html>
  <head>
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
              <p class="header-text">Reset Password</p>
            </td>
          </tr>
          <div class="form-body">
            <tr>
              <td>
                <p class="sub-text">Please enter your new password</p>
              </td>
            </tr>
            <tr>
              <form name="myForm" action="<?php echo BASEURL ?>/login/php" onsubmit="return validateForm()" method="post">
                <td class="label-td">
                  <label for="password" class="form-label">New Password: </label>
                </td>
              </tr>
              <tr>
                <td class="label-td">
                  <input type="password" name="password" placeholder="New Password" class="input-text" required>
                </td>
              </tr>
              <tr>
                <td class="label-td">
                  <label for="confirm_password" class="form-label">Confirm Password: </label>
                </td>
              </tr>
              <tr>
                <td class="label-td">
                  <input type="password" name="confirm_password" placeholder="Confirm Password" class="input-text" required>
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" value="reset" class="login-btn btn-primary btn">Reset Password</button>
                </td>
              </tr>
            </form>
            <tr>
              <td>
                <br>
                <label for="" class="sub-text" style="font-weight: 280;">Go back to </label><a href="<?php echo BASEURL ?>/login" class="hover-link1 non-style-link">Login</a>
                <br><br><br>
              </td>
            </tr>
          </div>
        </table>
      </div>
    </center>
  </body>
</html>
