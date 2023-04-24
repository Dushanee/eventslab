

<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}

?>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>

.section {
			margin-bottom: 20px;
			border: 1px solid #ddd;
			padding: 20px;
			background-color: #fff;
		}
</style>
</head>

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

                <a href="" class="active"><span class="material-symbols-rounded " >
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
          
       
           
            <!-- -------orders table----- -->
            <div class="recent-orders">
             


                <h2>Settings</h2>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Security</a></li>
			<li><a href="#">Page Edits</a></li>
		</ul>

	
		<div class="section">
			<h3>Profile</h3>
			<form>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username"><br><br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password"><br><br>
				<button type="submit">Save Changes</button>
			</form>
		</div>
		<div class="section">
			<h3>Security</h3>
			<form>
				<label for="current-password">Current Password:</label>
				<input type="password" id="current-password" name="current-password"><br><br>
				<label for="new-password">New Password:</label>
				<input type="password" id="new-password" name="new-password"><br><br>
				<label for="confirm-password">Confirm Password:</label>
				<input type="password" id="confirm-password" name="confirm-password"><br><br>
				<button type="submit">Change Password</button>
			</form>
		</div>
		<div class="section">
			<h3>Page Edits</h3>
			<form>
				<label for="page-title">Page Title:</label>
				<input type="text" id="page-title" name="page-title"><br><br>
				<label for="page-content">Page Content:</label>
				<textarea id="page-content" name="page-content"></textarea><br><br>
				<button type="submit">Save Changes</button>
			</form>
		</div>
	

                
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

</html>











