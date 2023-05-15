 <?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

?>
<?php

if (isset($data['error'])) {

    if (($data['error'] == 0)) {
?>
        <div class="alert-success">
            <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
            Service Provider succesfully verified !
        </div>
        <script>
            var alertBox = document.querySelector('.alert');
            alertBox.classList.add('show');
            setTimeout(function() {
                alertBox.classList.add('hide');
            }, 5000); // 5000 milliseconds = 5 seconds
            function dismissAlert(button) {
                var alertBox = button.parentElement;
                alertBox.classList.add('hide');
                setTimeout(function() {
                    alertBox.remove();
                }, 500); // 500 milliseconds = 0.5 seconds
            }
        </script>
    <?php

    } else {
    ?>
        <div class="alert">
            <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
            Error!
        </div>
        <script>
            var alertBox = document.querySelector('.alert');
            alertBox.classList.add('show');
            setTimeout(function() {
                alertBox.classList.add('hide');
            }, 5000); // 5000 milliseconds = 5 seconds
            function dismissAlert(button) {
                var alertBox = button.parentElement;
                alertBox.classList.add('hide');
                setTimeout(function() {
                    alertBox.remove();
                }, 500); // 500 milliseconds = 0.5 seconds
            }
        </script>
<?php
        // do something
    }
} else {
}

?>
<?php
$path = BASEURL;
$sps_per_page = 6;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $sps_per_page;
$total_sps = $data['drop'];
$total_pages = ceil($total_sps / $sps_per_page);


?>

<head>


    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container-full">
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
            
                echo " <th> Status</th>";
                // echo" <th>Package Description</th>";
                // echo"  <th>Location</th>";
                // echo"<th>Options</th>";
                // echo" <th>Rates</th>";
                echo" <th> </th>";
                echo " </tr>";
                echo " </thead>";
                echo " <tbody>";


                while ($row = $data['result']->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row["sp_id"] . "</td>";
                    echo "<td>" . $row["sp_name"] . "</td>";
                    echo "<td>" . $row["sp_email"] . "</td>";
                    // echo "<td>" . $row["sp_type_id"] . "</td>";

                    if($row['sp_type_id'] == 1){
                        echo "<td>Venue Provider</td>";

                    }else if($row['sp_type_id'] == 2){
                    
                    echo "<td>Food Caterer</td>";
                    
                    }else if($row['sp_type_id'] == 3){
                    
                        echo "<td>Decorations</td>";
                        
                        }else if($row['sp_type_id'] == 4){
                    
                            echo "<td>Photographer</td>";
                            
                            }
                    // echo "<td><a href=" . BASEURL . "/public/" . $row["document"] . ">View</a></a></td>";
                    

                    if($row['status'] == 1){
                        echo "<td>Verified</td>";

                    }else{
                    
                    echo "<td>Not Verified</td>";
                    
                    }
                    
                    echo "<td ><a href=" . BASEURL . "/user/viewSp/". $row["sp_id"] . "><input type='button' class='button-view' value='View'  ></a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";

                ?>

                <a href="">Show all</a>
            </div>
        </main>
        <!-- ------- end of main ----- -->

        

    </div>

</body>

</html>