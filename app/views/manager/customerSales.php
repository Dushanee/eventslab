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
    

    </style>



    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/manager_styles.css">


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
                <a href="<?php echo BASEURL ?>/managerFunction/dashboard" "><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/sales"><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Sales</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/customerSales" class="active"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Customer Sales</h3>
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
    <label for="cust">Select customer:</label>
    <input type="text" name="cust" id="cust" value="<?php echo isset($_GET['cust']) ? $_GET['cust'] : ''; ?>">
    <button type="submit">Filter</button>
</form>

<?php
// Replace with your database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'eventslab';

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Build the SQL query to retrieve customer and order information
$sql = "SELECT c.cust_fname, c.cust_lname, o.order_id, o.order_date, o.total_price
        FROM customers c
        JOIN orders o ON c.cust_id = o.cust_id";

// Check if the customer name filter was applied
if (isset($_GET['cust'])) {
    $cust = mysqli_real_escape_string($conn, $_GET['cust']);
    $sql .= " WHERE c.cust_fname LIKE '%$cust%' OR c.cust_lname LIKE '%$cust%'";
}

$sql .= " ORDER BY o.order_date DESC";

$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Display the results in a table
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Customer Name</th>';
echo '<th>Order ID</th>';
echo '<th>Order Date</th>';
echo '<th>Total Price</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['cust_fname'] . ' ' . $row['cust_lname'] . '</td>';
    echo '<td>' . $row['order_id'] . '</td>';
    echo '<td>' . $row['order_date'] . '</td>';
    echo '<td>$' . number_format($row['total_price'], 2) . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

// Close the database connection
mysqli_close($conn);
?>







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