


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
                <a href="<?php echo BASEURL ?>/superAdmin/superAdmin" ><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/superAdmin/manageUsers"class="active" ><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Manage Users</h3>
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
  <form action="<?php echo BASEURL ?>/user/editUser" method="post">
<?php
  while ($row = $data['result']->fetch_assoc()) {
    echo"<label>Id</label>";
    echo"<input type='text' name='id' value='$row[id]'>";

    echo"<label>First Name</label>";
    echo"<input type='text' name='fname' value='$row[fname]'>";

    echo"<label>Last Name</label>";
    echo"<input type='text'  name='name' value='$row[lname]'>";

    echo"<label>Email</label>";
    echo"<input type='text'  name='email' value='$row[email]'>";

    echo"<label>User Type</label>";
    echo"<input type='text'  name='user_type' value='$row[user_type]'>";
    
    echo"<label>Status</label>";
    echo"<input type='text'  name='status' value='$row[status]'>";



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
    <a href="<?php echo BASEURL ?>/superAdmin/customer">
                     <button type="submit"  class="login-btn btn-primary btn">Back</button></a>
                    </div>


        </main>




        <!-- ------- end of main ----- -->
 <!-- =====right=== -->
       

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