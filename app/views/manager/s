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
                <a href="<?php echo BASEURL ?>/managerFunction/dashboard"><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/sales" class="active"><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Sales</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/customerSales"><span class="material-symbols-rounded">
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


            <!-- display highest sales day card -->
      <?php

             // Connect to database
             $conn = mysqli_connect('localhost', 'root', '', 'eventslab');
            $sql2 = "SELECT DATE(order_date) AS date, SUM(total_price) AS revenue, COUNT(*) AS num_orders
            FROM orders
            GROUP BY DATE(order_date)
            ORDER BY COUNT(*) DESC
            LIMIT 1";

            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
 // Close database connection
 mysqli_close($conn);
            ?>
<div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?php echo BASEURL ?>/images/user.png" alt="">
                        </div>
                        <div class="message">
                            <h2><b>Highest sales</b> on</h2>
                            <p><strong> Date: </strong> <?php echo $row2['date']; ?></p>
            <p><strong> Revenue: </strong> <h4>LKR <?php echo number_format($row2['revenue'], 2); ?>  </p></h4>
            <p><strong>Number of Orders:</strong> <?php echo $row2['num_orders']; ?></p>
                            <!-- <small class="text-muted"> 2 minutes ago</small> -->
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>







     
</div>


    </div>
    <script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>