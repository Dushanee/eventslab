<?php  


if (isset($_POST['UName']) && isset($_POST['msg'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['UName']);
	$message = validate($_POST['msg']);

	if (empty($message) || empty($name)) {
		header("Location: Contactusform.php");
	}else {

		$sql = "INSERT INTO fromCustomers(UName, msg) VALUES('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: Contactusform.php");
}