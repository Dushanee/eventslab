


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
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            
            <!-- -------orders table----- -->
           


            <div class="view-form">
  <form action="<?php echo BASEURL ?>/user/editCustomer" method="post">
<?php
  while ($row = $data['result']->fetch_assoc()) {
    echo"<label >Customer Id</label>";
    echo"<input type='text'  name='cust_id' value=' $row[cust_id] '>";

    echo"<label >First Name</label>";
    echo"<input type='text'  name='cust_fname' value=' $row[cust_fname] '>";

    echo"<label >Last Name</label>";
    echo"<input type='text'  name='cust_lname' value=' $row[cust_lname] '>";

    echo"<label >Email</label>";
    echo"<input type='text'  name='cust_email' value=' $row[cust_email] '>";

    // echo"<label >Birthday</label>";
    // echo"<input type='date'  name='birthday' value=' $row[birthday] '>";
  };
  ?>


   

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


    <!-- <div class="view-container">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Birthday</label>
                </div>
                <div class="col-75">
                    <input type="date" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <br>
            <div class="row">
                <input type="submit" value="Update">
            </div>
        </form>
    </div> -->

</body>

</html>