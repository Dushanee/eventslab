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


                <a href="<?php echo BASEURL ?>/adminFunction/packages" class="active"><span class="material-symbols-rounded">
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
    <select name="sp_type" >
        <option value="">Venue</option>
        <option value="">Decoration</option>
        <option value="">Catering</option>
    </select>

</div>
              <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Package Id</th>
                            <th>Package Name</th>
                            <th>Service Provider</th>
                            <th>Package Description</th>
                            <th>Location</th>
                            <th>Options</th>
                            <th>Rates</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Araliya Resort</td>
                            <td>Jhon Doe</td>

                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci atque te</td>
                            <td>Kandy</td>
                            <td><select name="option_name" class="custom-select"><option value="">Hall 1</option><option value="">Hall 2</option>
                            </select></td>

                            <td class="primary">10,000</td>
                            <td class="primary">Delete</td>
                        </tr>


                        <tr>
                            <td>1</td>
                            <td>Araliya Resort</td>
                            <td>Jhon Doe</td>

                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci atque te</td>
                            <td>Kandy</td>
                            <td><select name="option_name" class="custom-select"><option value="">Hall 1</option><option value="">Hall 2</option>
                            </select></td>

                            <td class="primary">10,000</td>
                            <td class="primary">Delete</td>
                        </tr>
                    </tbody>


                </table>
                <a href="">Show all</a>
            </div>
        </main>
        <!-- ------- end of main ----- -->

        </div>
<script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>








