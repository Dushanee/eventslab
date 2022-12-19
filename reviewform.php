<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
	</style>
</head>
<body>
    <form method="post" action="review.php">
    	<label>Name:</label>
    	<input type="text" 
    	       name="UName">
    
    	<label>Message:</label>
    	<textarea name="Review"></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
</body>
</html>