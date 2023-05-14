<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}


?>




<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/packages.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


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
                <a href="<?php echo BASEURL ?>/adminFunction/admin" ><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/customer" ><span class="material-symbols-rounded">
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
                <a href="<?php echo BASEURL ?>/user/verify"><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Verify Users</h3>
                    <span class="message-count">31</span>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>


                <a href="<?php echo BASEURL ?>/adminFunction/packages"class="active"><span class="material-symbols-rounded">
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
        <h1>Packages</h1>

<p>filter by</p>

<div class="custom-select">
<select name="sp_type_id" onchange="setSessionVariable(this.value)">
    <?php
        while ($row = $data['drop']->fetch_assoc()) {
         
            echo '<option value="' . $row['sp_type_id'] . '">' . $row['sp_type_id'] . '</option>';
        }
    ?>
</select>
</div>
              <!-- -------orders table----- -->
            <div class="recent-orders">
            <h2>Package Details</h2>
                <?php 
    $path = BASEURL;
    echo"<table>";
    echo" <thead>";
    echo" <tr>";
    echo"    <th>Package Id</th>";
    echo" <th>Package Name</th>";
    echo" <th>Service Provider Id</th>";
    echo" <th>Service Provider Name</th>";
    echo" <th>Service Type</th>";
    // echo" <th>Package Description</th>";
    // echo"  <th>Location</th>";
    // echo"<th>Options</th>";
    // echo" <th>Rates</th>";
    // echo" <th>Actions</th>";
    echo" </tr>";
    echo" </thead>";
    echo" <tbody>";
                        



    
    mysqli_data_seek($data['result'], 0);
    while ($row = $data['result']->fetch_assoc()) {

     

        echo "<tr>";
        echo "<td>" . $row["pack_id"] . "</td>";
        echo "<td>" . $row["pack_name"] . "</td>";
   
        echo "<td>" . $row["sp_id"] . "</td>";

        echo "<td>" . $row["sp_name"] . "</td>";
        echo "<td>" . $row["sp_type_id"] . "</td>";
        echo "</tr>";
         
                        echo"</tbody>";

    }
                        echo"</table>";

                        ?>
                <a href="">Show all</a>
            </div>
        </main>
        <!-- ------- end of main ----- -->

        </div>
<script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>


<script>
    function setSessionVariable(value) {
        // Set the selected value as a session variable
        // You can modify the session variable name to fit your needs
        <?php $_SESSION['selected_sp_type_id'] = "' + value + '"; ?>
        // Redirect to the packages function in the adminFunction controller with the sp_type_id parameter
        // You can modify the BASEURL to match the base URL of your website
        window.location.href = '<?php echo BASEURL ?>/adminFunction/packages/'+ value;
    }
</script>





