<?php  


if (isset($_POST['UName']) && isset($_POST['Review'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['UName']);
	$review = validate($_POST['Review']);

	if (empty($review) || empty($name)) {
		header("Location: reviewform.html");
	}else {

		$sql = "INSERT INTO reviews(UName, Review) VALUES('$name', '$review')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your review saved successfully!";
		}else {
			echo "An error occured!";
		}
	}

}else {
	header("Location: reviewform.html");
}