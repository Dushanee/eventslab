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
                    <img src="<?php echo BASEURL ?>/images/logo1.png" alt="">
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
                <a href="<?php echo BASEURL ?>/adminFunction/customer" class="active"><span class="material-symbols-rounded">
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
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>


                <a href=""><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Gigs</h3>
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
            <h1>Customers</h1>

            <div class="date">
                <input type="date">
            </div>

            
           
            <!-- -------orders table----- -->
            <div class="recent-orders">
                <h2>Customer Details</h2>
                <?php 

                $path = BASEURL;
               echo" <table>";
                   echo "<thead>";
                   echo "<tr>";
                   echo " <th>Id</th>";
                   echo "  <th>Name</th>";
                   echo "  <th>Email</th>";
                   echo " <th>Actions</th>";
                   echo " </tr>";
                   echo "</thead>";
                   echo " <tbody>";
                   while ($row = $data['result']->fetch_assoc()) {
              
                 
                        
                        echo "<tr>";
                        echo "<td>" . $row["cust_id"] . "</td>";
                        echo "<td>" . $row["cust_fname"] . "</td>";
                          
                         
                        echo "<td>" . $row["cust_email"] . "</td>";

                        echo "<td class='warning'><a href=" . BASEURL . "/user/viewCustomer/". $row["cust_id"] . "><input type='button' value='View' class='login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

                        echo "<td class='warning'><a href=" . BASEURL . "/user/viewCustomer/". $row["cust_id"] . "><input type='button' value='Edit' class=' success login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

                        echo "<td class='warning'><a href=" . BASEURL . "/user/deleteCustomer/". $row["cust_id"] . "><input type='button' value='Delete' class=' danger login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

                        echo" </tr>";
                        
                        echo"    </tbody>";
                   }
              echo"  </table>";
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
                <h2>Add customer</h2>
                <div class="updates">
                    <div class="">
                        
                    <form action="<?php echo BASEURL ?>/user/addCustomer" method="post">
                    <div class="col">
                        <label>Customer Id</label><br>
                        <input type="text" name="cust_id" placeholder="3"><br>
                    </div>
                    <div class="col">
                        <label>Email Address</label><br>
                        <input type="text" name="cust_email" placeholder="user@gmail.com"><br>
                    </div>
                    <div class="col">
                        <label>First Name</label><br>
                        <input type="text" name="cust_fname" placeholder="user"><br>
                    </div>
                    
                    <div class="col">
                        <label>Second Name</label><br>
                        <input type="text" name="cust_lname" placeholder="user123"><br>
                    </div>

                    <div class="col">
                        <label>Temporary Password</label><br>
                        <input type="password" name="cust_password" placeholder="123456"><br>
                    </div>
                    
                 
                    

                    <div class="col">
                     <button type="submit"  class="login-btn btn-primary btn">Submit</button>
                    </div>
                </div>
                    
                </form>
                    

                   

                
            </div>
            <!-- =====end of recent updates === -->

            
        </div>

        </div>

</body>

</html>