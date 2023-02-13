


<link rel="stylesheet" type="text/css " href="<?php echo BASEURL ?>/public/css/customer_view.css">

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
                <a href="" class="active"><span class="material-symbols-rounded">
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
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            
            <!-- -------orders table----- -->
           


            <div class="view-form">
  <form action="<?php echo BASEURL ?>/user/editOrder">
<?php
  while ($row = $data['result']->fetch_assoc()) {
    echo"<label >Order Id</label>";
    echo"<input type='text'  name='order_id' value=' $row[order_id] '>";

    echo"<label >Customer ID</label>";
    echo"<input type='text'  name='cust_fname' value=' $row[cust_id] '>";


    echo"<label >Customer Name</label>";
    echo"<input type='text'  name='cust_fname' value=' $row[cust_fname] '>";



    echo"<label >Order Date</label>";
    echo"<input type='date'  name='order_date' value=' $row[order_date] '>";
  };

  
  ?>
x

  <br>

  
  <div class="col">
    <br>
                     <button type="submit"  class="login-btn btn-primary btn">Update</button>
                    </div>
  </form>
</div>

  
<div class="col">
    <br>
    <a href="<?php echo BASEURL ?>/adminFunction/customer">
                     <button type="submit"  class="login-btn btn-primary btn">Back</button></a>
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
                        <img src="<?php echo BASEURL ?>/images/logo1.png" alt="dp">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->
            

              
         

            <!-- =====end of recent updates === -->

            <!-- =====sales analytics-->

            
        </div>

        </div>


 

</body>

</html>