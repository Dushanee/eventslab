<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['fname'];
} else {
    echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "eventslab");
$rows = mysqli_query($conn, "SELECT email FROM users");

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

           
            <div class="recent-orders">
                <h2>All Internal Users</h2>
                <?php

$path = BASEURL;
echo " <table>";
echo "<thead>";
echo "<tr>";
echo " <th>Id</th>";
echo "  <th>Name</th>";
echo "  <th>Role</th>";
echo " <th>Status</th>";
echo " <th>Actions</th>";

echo " </tr>";
echo "</thead>";
echo " <tbody>";
while ($row = $data['result']->fetch_assoc()) {



    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["fname"]."</td>";


    echo "<td>".$row["user_type"]."</td>";
    echo "<td>".$row["status"]."</td>";



    echo "<td class='warning'><a href=" . BASEURL . "/user/viewUsers/" . $row["id"] . "><input type='button' value='Edit' class=' success login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

    echo "<td class='warning'><a href=" . BASEURL . "/user/deleteUser/" . $row["id"] . "><input type='button' value='Delete' class=' danger login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";

    echo " </tr>";

    echo "    </tbody>";
}
echo "  </table>";



?>
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
                        <p>Hey ,<b> <?php echo $_SESSION['email'];?></b></p>
                        <small class="text-muted"> Super Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?php echo BASEURL ?>/images/man.jpg" alt="dp">
                    </div>
                </div>
            </div>


            <!-- =====end of top=== -->
            

          
            <div class="recent-updates">
                <h2>Add User</h2>
                <div class="updates">
                    <div class="">

                        <form action="<?php echo BASEURL ?>/user/addUser" method="post">
                            <div class="col">
                                <label>Id</label><br>
                                <input type="text" name="id" placeholder="3"><br>
                            </div>
                         
                            <div class="col">
                                <label>First Name</label><br>
                                <input type="text" name="fname" placeholder="user"><br>
                            </div>

                            <div class="col">
                                <label>Second Name</label><br>
                                <input type="text" name="lname" placeholder="user123"><br>
                            </div>
                            <div class="col">
                                <label>Email Address</label><br>
                                <input type="text" name="email" placeholder="user@gmail.com"><br>
                            </div>

                            <!-- <div class="col">
                                <label>Temporary Password</label><br>
                                <input type="password" name="password" placeholder="123456"><br>
                            </div> -->

                            <div class="col">
                                <label>User Type</label><br>
                                <input type="text" name="user_type" placeholder="admin"><br>
                            </div>
                            <div class="col">
                                <label>Status</label><br>
                                <input type="text" name="status" placeholder="1"><br>
                            </div>


                            <div class="col">
                                <button type="submit" class="login-btn btn-primary btn">Submit</button>
                            </div>
                    </div>

                    </form>





                </div>
           
        </div>

        </div>
<script src="<?php echo BASEURL ?>/public/js/index.js"></script>
</body>





