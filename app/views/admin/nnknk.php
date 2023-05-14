<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

?>

<head>
    <!-- <style>
        input[type="checkbox"] {
            background-color: #fff;
            margin: 0 auto;
            display: block;
            width: 25px;
            height: 25px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 2px solid #555;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="checkbox"]:checked {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
    </style> -->

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
                <a href="<?php echo BASEURL ?>/adminFunction/admin"><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/customer"><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Customers</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/service"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Service Providers</h3>
                </a>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/orders"><span class="material-symbols-rounded">
                        order_approve
                    </span>
                    <h3>Orders</h3>
                </a>


                <?php
                // Connect to the database
                $db = new mysqli('localhost', 'root', '', 'eventslab');

                // Check if the connection was successful
                if ($db->connect_error) {
                    die('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
                }

                // Query the database to get the count of inactive sellers
                $sql = "SELECT COUNT(*) AS inactive_count FROM service_providers WHERE status = 0";
                $result = $db->query($sql);

                // Check if the query was successful
                if (!$result) {
                    die('Query Error: ' . $db->error);
                }

                // Fetch the result
                $row = $result->fetch_assoc();

                // Display the count of inactive sellers
                // echo 'Number of inactive sellers: ' . $row['inactive_count'];

                // Close the database connection
                $db->close();
                ?>

                <a href="" class="active"><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Verify Users</h3>
                    <span class="message-count"><?php echo $row['inactive_count']; ?></span>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>

                <a href="<?php echo BASEURL ?>/adminFunction/packages"><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        summarize
                    </span>
                    <h3>Reports</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>


                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>

        <!-- ------- end of side bar ----- -->
        <main>
            <h1>Service Providers</h1>



            <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Verify Service Providers</h2>
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

                // If the form was submitted, update the status of the service provider
                if (isset($_POST['verify']) && isset($_POST['sp_id'])) {
                    $sp_id = $_POST['sp_id'];
                    $status = $_POST['verify'] == 'on' ? 1 : 0;
                    $update_sql = "UPDATE service_providers SET status = $status WHERE sp_id = $sp_id";
                    mysqli_query($conn, $update_sql);
                }

                // Build the SQL query to retrieve service provider information
                $sql = "SELECT sp_id, sp_name, sp_email, sp_city, business_name, contact_num, document, status
        FROM service_providers";

                // Execute the query and fetch the results
                $service_providers = mysqli_query($conn, $sql);

                // Close the database connection
                mysqli_close($conn);
                ?>

                <!-- Create an HTML table to display the service providers -->
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Business</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Verify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through the service providers and create a row for each one -->
                        <?php while ($sp = mysqli_fetch_assoc($service_providers)) : ?>

                            <tr>
                                <td><?= $sp['sp_name'] ?></td>
                                <td><?= $sp['sp_email'] ?></td>
                                <td><?= $sp['sp_city'] ?></td>
                                <td><?= $sp['business_name'] ?></td>
                                <td><a href=" <?= $sp['document'] ?>"> </a></td>
                                <td><?= $sp['status'] == 1 ? 'Verified' : 'Unverified' ?></td>
                                <td>
                                    <?php if ($sp['status'] == 0) : ?>


                                        <form method="post">
                                            <input type="hidden" name="sp_id" value="<?= $sp['sp_id'] ?>">
                                            <select name="status" onchange="this.form.submit()">
                                                <option value="1" <?= $sp['status'] == 1 ? 'selected' : '' ?>>Verified</option>
                                                <option value="0" <?= $sp['status'] == 0 ? 'selected' : '' ?>>Unverified</option>
                                            </select>
                                        </form>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>

                <a href="">Show all</a>
            </div>
        </main>
        <!-- ------- end of main ----- -->

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
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="1.jpg" alt="">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->

            <div class="recent-updates">
                <!-- <h2>Add Service Provider</h2> -->
                <!-- <div class="updates">
                   
                </div> -->

                </form>

            </div>
            <!-- =====end of recent updates === -->


        </div>

    </div>

</body>

</html>