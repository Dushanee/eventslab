<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="./css/blogreg.css">
</head>
<body>
    <div class="form">
    	
    	<form class="reg" 
    	      action="./register.php" 
    	      method="post"
    	      enctype="multipart/form-data">

    		<h4 class="top">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert-d" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert-s" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="lab">
		    <label class="form-lab">Username</label>
		    <input type="text"
				   placeholder="Enter your username"	
		           class="input"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="lab">
		    <label class="form-lab">Password</label>
		    <input type="password" 
					placeholder="Enter your password"
		           class="input"
		           name="pass">
		  </div>

		  <div class="lab">
		    <label class="form-lab">Confirm Password</label>
		    <input type="password" 
			       placeholder="Re-enter your password"
		           class="input"
		           name="repass"
		           value="<?php echo (isset($_GET['repass']))?$_GET['repass']:"" ?>">
		  </div>


		  <div class="lab">
		    <label class="form-lab">Profile Picture</label>
		    <input type="file" 
			       placeholder="Upload a profile picture"
		           class="input"
		           name="pp">
		  </div>
		  
		  <button type="submit" class="register">Sign Up</button><br />
		  <p>Already registered? </p><a href="./bloglog.php" class="link">Login</a>
		</form>
    </div>
</body>
</html>