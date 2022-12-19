<!DOCTYPE html>
<html>
<body>

<?php
include 'db_conn.php';


$sql = "SELECT id, UName, msg FROM fromCustomers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " UName". $row["UName"]. " " . $row["msg"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>