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
	$reply = validate($_POST['reply']);

	if (empty($reply) || empty($name)) {
		header("Location: Contactusform.php");
	}else {

		$sql = "INSERT INTO fromCustomers(reply) VALUES('$reply')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your reply was sent successfully!";
		}else {
			echo "Your reply could not be sent!";
		}
	}

}else {
	header("Location: Contactusform.php");
}