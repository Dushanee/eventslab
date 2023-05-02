<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "eventslab");
$rows = mysqli_query($conn, "SELECT email FROM users");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Sales Report</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

        form {
  width: 400px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

textarea {
  height: 100px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

	</style>



<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo BASEURL ?>/images/logo1.png" alt="logo">
                    <h2>Events
                        <span class="logo-colour">Lab</span>
                    </h2>
                </div>
                <div class="close" id="close-btn"><span class="material-symbols-rounded">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo BASEURL ?>/superAdmin/superAdmin" class="active"><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/superAdmin/manageUsers" ><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Sales</h3>
                </a>
               

                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>

        <!-- ------- end of side bar ----- -->
        <main>
           
	<h1>Sales Report</h1>
    <form method="GET" action="">
    <label for="date">Select date:</label>
    <input type="date" name="date" id="date" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>">
    <button type="submit">Filter</button>
</form>

	<table>
		<thead>
			<tr>
				<th>Date</th>
				<th>Total Revenue</th>
				<th>Number of Orders</th>
				<th>Average Order Value</th>
			</tr>
		</thead>
		<tbody>
    <?php
        // Connect to database
        $conn = mysqli_connect('localhost', 'root', '', 'eventslab');

        // Query to get sales data
        $sql = "SELECT DATE(order_date) AS date, SUM(total_price) AS revenue, COUNT(*) AS num_orders, AVG(total_price) AS avg_order_value
                FROM orders";
        // Get selected date from form input
        $date = isset($_GET['date']) ? $_GET['date'] : null;
        // Build SQL query with optional WHERE clause for selected date
        if ($date) {
            $sql .= " WHERE DATE(order_date) = '$date'";
        }
        $sql .= " GROUP BY DATE(order_date)";

        // Execute query
        $result = mysqli_query($conn, $sql);

        // Loop through results and display in table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>$' . number_format($row['revenue'], 2) . '</td>';
            echo '<td>' . $row['num_orders'] . '</td>';
            echo '<td>$' . number_format($row['avg_order_value'], 2) . '</td>';
            echo '</tr>';
        }

        // Close database connection
        mysqli_close($conn);
    ?>
</tbody>

	</table>




           
        </main>
        <!-- ------- end of main ----- -->
 <!-- =====right=== -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-rounded">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-rounded active"> light_mode</span>
                    <span class="material-symbols-rounded">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey ,<b> Dushanee</b></p>
                        <small class="text-muted">E-commerce Manager</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?php echo BASEURL ?>/images/man.jpg" alt="dp">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->
            


           
        </div>

        </div>
<script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>





