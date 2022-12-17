<?php

session_start();

if (isset($_SESSION['username'])) {
    // echo $_SESSION['username'];
} else {
    echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "eventslab");
$rows = mysqli_query($conn, "SELECT username FROM admin");

?>


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">




<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<script src="https://code.jquery.com/jquery-3.6.1.min.js">
</script>


<body>
    <section id="menu">
        <div class="logo">
            <img src="<?php echo BASEURL ?>/images/logo.png" alt="">
            <h2>EVENT LABS</h2>
        </div>
        <div class="items">
            <li> <u><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/adminFunction/admin">Dashboard</a></u></li>
            <li><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/adminFunction/customer">Customers</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/adminFunction/service">Service Providers</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="#">Notifications</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="welcome/signout">Log Out</a></li>


        </div>



    </section>


    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class='bx bx-menu'>
                    </i>
                </div>
                <div class="search">
                    <i class='bx bx-search-alt'></i>
                    <input type="text" placeholder="search">


                </div>
            </div>


            <div class="profile">
                <?php $i = 1; ?>
                <?php foreach ($rows as $row) : ?>
                    <h5>Hi <?php echo $row["username"]; ?> </h5>
                <?php endforeach; ?>
                <i id="bell-btn" class='bx bxs-bell'></i>
                <img src="<?php echo BASEURL ?>/images/1.jpg" alt="">

            </div>
        </div>



        <h3 class="i-name">Dashboard</h3>

        <div class="values">
            <div class="val-box">
                <i class='bx bx-search-alt'></i>
                <div>
                    <h3>2812</h3>
                    <span>new users</span>
                </div>

            </div>
            <div class="val-box">
                <i class='bx bx-search-alt'></i>
                <div>
                    <h3>2812</h3>
                    <span>new users</span>
                </div>

            </div>
            <div class="val-box">
                <i class='bx bx-search-alt'></i>
                <div>
                    <h3>2812</h3>
                    <span>new users</span>
                </div>

            </div>
            <div class="val-box">
                <i class='bx bx-search-alt'></i>
                <div>
                    <h3>2812</h3>
                    <span>new users</span>
                </div>

            </div>
        </div>


        <script>
            $('#menu-btn').click(function() {
                $('#menu').toggleClass("active");
            })
        </script>

    </section>


</body>