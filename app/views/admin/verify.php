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
                $path = BASEURL;
                echo "<table>";
                echo " <thead>";
                echo " <tr>";
                echo "    <th>SP Id</th>";
                echo " <th>SP Name</th>";
                echo " <th>SP Email</th>";
                echo " <th>SP Type</th>";
                echo " <th>Document</th>";
                echo " <th> Status</th>";
                // echo" <th>Package Description</th>";
                // echo"  <th>Location</th>";
                // echo"<th>Options</th>";
                // echo" <th>Rates</th>";
                echo" <th>Verify User </th>";
                echo " </tr>";
                echo " </thead>";
                echo " <tbody>";


                while ($row = $data['result']->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row["sp_id"] . "</td>";
                    echo "<td>" . $row["sp_name"] . "</td>";
                    echo "<td>" . $row["sp_email"] . "</td>";
                    echo "<td>" . $row["sp_type_id"] . "</td>";
                    echo "<td><a href=" . BASEURL . "/public/" . $row["document"] . ">View</a></a></td>";
                    

                    if($row['status'] == 1){
                        echo "<td>Verified</td>";

                    }else{
                    
                    echo "<td>Not Verified</td>";
                    
                    }
                    
                    
                    
                    
                    echo "<td class='warning'><a href=" . BASEURL . "/user/viewSp/". $row["sp_id"] . "><input type='button' class='button-view' value='View' class='login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";

                ?>

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