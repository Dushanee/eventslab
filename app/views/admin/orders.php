

<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}


?>



<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">


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
                <a href="<?php echo BASEURL ?>/adminFunction/admin"><span class="material-symbols-rounded">
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
                <a href="<?php echo BASEURL ?>/adminFunction/orders" class="active"><span class="material-symbols-rounded">
                        order_approve
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href=""><span class="material-symbols-rounded">
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
            <h1>Orders</h1>
<p>filter by</p>
            <div class="date">
                <input type="date">
            </div>

            
           
            <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Order Details</h2>
                <?php 
    $path = BASEURL;
    echo"<table>";
    echo" <thead>";
    echo" <tr>";
    echo" <th>Order Id</th>";
    echo" <th>Date</th>";
    echo" <th>Customer Id</th>";
    echo" <th>Customer Name </th>";
                          
    echo" </thead>";
    echo" <tbody>";
    while ($row = $data['result']->fetch_assoc()) {
      
                        echo "<tr>";
                        echo "<td>" . $row["order_id"] . "</td>";
                        echo "<td>" . $row["order_date"] . "</td>";
                        echo "<td>" . $row["cust_id"] . "</td>";
                        echo "<td>" . $row["cust_fname"] . "</td>";
                          
                         
                        echo "<td>Paid</td>";
                        echo "<td class='warning'><a href=" . BASEURL . "/order/viewOrder/". $row["order_id"] . "><input type='button' value='View' class='login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

                    echo "</tr>";
                        
                        echo" </tbody>";

    }
                        echo"</table>";
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

            
            <!-- =====end of recent updates === -->

            
        </div>

        </div>

</body>
