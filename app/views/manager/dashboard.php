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
                <a href="<?php echo BASEURL ?>/managerFunction/dashboard" class="active"><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/sales" ><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Sales</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/customerSales"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Customer Sales</h3>
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


                <a href="<?php echo BASEURL ?>/adminFunction/packages"><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href="<?php echo BASEURL ?>/adminFunction/payments"><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        summarize
                    </span>
                    <h3>Reports</h3>
                </a>

                <a href="<?php echo BASEURL ?>/adminFunction/settings"><span class="material-symbols-rounded">
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
            <h1>Dashboard</h1>

           

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-rounded">
                        analytics
                    </span>

                    <div class="middle">
                        <div class="left">
                             <h3>Total Customers</h3>
                            <h1> <?php echo $data['drop']; ?></h1>
                        </div>

                        <!-- <div class="progress">

                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- <small class="text-muted">
                        Last 24 hours
                    </small> -->
                </div>
                <!-- ------- end of sales card ----- -->
                
               <div class="expenses">
                    <span class="material-symbols-rounded">
                        bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                        <h3>Total Service Providers</h3>
               
               <h1> <?php echo $data['result']; ?></h1>

                        </div>

                        <!-- <div class="progress">

                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>21%</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- <small class="text-muted">
                        Last 24 hours
                    </small> -->
                </div>
                <!-- ------- end of expenses card ----- -->
                <div class="income">
                    <span class="material-symbols-rounded">
                        database
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Packages</h3>
               
                            <h1> <?php echo $data['result']; ?></h1>
                        </div>

                        <!-- <div class="progress">

                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>54%</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- <small class="text-muted">
                        Last 24 hours
                    </small> -->
                </div>
                <!-- ------- end of income card ----- -->
            </div>
            <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product No</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Araliya Resort</td>
                            <td>9324</td>
                            <td>Paid</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Araliya Resort</td>
                            <td>9324</td>
                            <td>Paid</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Araliya Resort</td>
                            <td>9324</td>
                            <td>Paid</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Araliya Resort</td>
                            <td>9324</td>
                            <td>Paid</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>


                </table>
                <a href="">Show all</a>
            </div>
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
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?php echo BASEURL ?>/images/man.jpg" alt="dp">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->
            

              
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="<?php echo BASEURL ?>/images/user.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Jhon Doe</b> recieved his payments</p>
                            <small class="text-muted"> 2 minutes ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="1.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Jhon Doe</b> recieved his payments</p>
                            <small class="text-muted"> 2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="1.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Jhon Doe</b> recieved his payments</p>
                            <small class="text-muted"> 2 minutes ago</small>
                        </div>

                    </div>

                </div>
            </div>
            <!-- =====end of recent updates === -->

            <!-- =====sales analytics-->

            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-rounded">
                            shopping_cart
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3245</h3>
                    </div>
                </div>

                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-rounded">
                            shopping_cart
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Offline Orders</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="danger">+39%</h5>
                        <h3>3245</h3>
                    </div>
                </div>

                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-rounded">
                            shopping_cart
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3245</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div><span class="material-symbols-rounded">
                        shopping_cart
                    </span>
                        <h3>Add products</h3>
                    </div>
                </div>


            </div>

        </div>

        </div>
<script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>
