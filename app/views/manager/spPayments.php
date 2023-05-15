<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

?>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/customers.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


<style>

.container {
    display: grid;
    width: 96%;
    margin: 0 auto;
    gap: 1.8rem;
    grid-template-columns: 14rem auto ;
    /* background: #171720; */
}
</style>
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
                <a href="<?php echo BASEURL ?>/managerFunction/dashboard" ><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/sales"><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Sales</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/customerSales"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Customer Sales</h3>
                </a>
                <a href="<?php echo BASEURL ?>/managerFunction/payments" class="active"><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>


                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>

        <!-- ------- end of side bar ----- -->
        <main>

            <div class="full-width">
                <h1>Service Provider Payments</h1>



                <!-- -------orders table----- -->
                <div class="recent-orders">

                    <table>
                        <tr>

                            <th>Order Id</th>
                            <th>Option Id</th>
                            <th>Option Name</th>

                            <th>Option Description</th>
                            <th>Option Rate</th>
                            <th>Package Id</th>
                            <th>Sp Id</th>
                        </tr>
                        <?php
                        // Connect to the database

                        // Retrieve data from the payments table


                        // Loop through the results and display them as a table
                        while ($row = $data['result']->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['order_id'] . "</td>";
                            echo "<td>" . $row['option_id'] . "</td>";
                            echo "<td>" . $row['option_name'] . "</td>";
                            echo "<td>" . $row['option_description'] . "</td>";
                            echo "<td>" . $row['option_rate'] . "</td>";
                            echo "<td>" . $row['pack_id'] . "</td>";
                            echo "<td>" . $row['sp_id'] . "</td>";
                            echo "<td class='warning'><a href='" . BASEURL . "/user/viewCustomer/" . $row["sp_id"] . "'><input type='button' value='Pay Now' class='login-btn btn-primary btn button-view'></a></td>";
                            echo "</tr>";
                        }


                        ?>
                    </table>

                    <a href="">Show all</a>
                </div>

                <!-- ------- end of main ----- -->



            </div>
        </main>

</body>

</html>