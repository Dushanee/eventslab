<!DOCTYPE html>
<html>
<head>
	<title>Reply</title>
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
    <div class="container">
    <form method="post" action="reply.php">
    	<label>Type a reply</label>
    	<textarea name="reply"></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
    </div>
</body>
</html>