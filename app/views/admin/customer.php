<?php

session_start();

if (isset($_SESSION['username'])) {
  echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "eventslab");
$rows = mysqli_query($conn, "SELECT * FROM customer");

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
            <li><i class='bx  bx-right-arrow'></i><a href="#">Dashboard</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/adminFunction/customer">Customers</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/adminFunction/service">Service Providers</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="#">Notifications</a></li>
            <li><i class='bx  bx-right-arrow'></i><a href="<?php echo BASEURL ?>/welcome/signout">Log Out</a></li>


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
            <i id="bell-btn" class='bx bxs-bell'></i>
                <img src="<?php echo BASEURL ?>/images/1.jpg" alt="">

            </div>
        </div>
        <h3 class="i-name">Customer Details</h3>

       
                    <button class="button-sec" type="submit" value="add">Add Customers </button>
      

        <div class="board">
            <table width="100%">
                <thead>
                    <tr>  
                        <td>Id</td>
                        <td>Details</td>
                        <td>Status</td>
                        <td>Operations</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
              
                <?php $i = 1; ?>
            <?php foreach($rows as $row) : ?>
                    <tr> 
                        <td><?php echo $row["id"]; ?></td>
                        <td class="people">
                            <img src="<?php echo BASEURL ?>/images/2.jpg" alt="">
                            <div class="people-de">
                                <h5><?php echo $row["name"]; ?></h5>
                   
                            </div>
                        </td>
                        <td class="active">
                            <p>active</p>
                        </td>
                          <td class="edit"><a href="#">View</a></td>

                          <td><button class="delBtn"><span>Delete</span></button></td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </section>

    <div class="container">


<form action="<?php echo BASEURL ?>/user/addCustomer" method="post">
<div class="col">
        <label>Customer ID</label><br>
        <input type="text" name="id" placeholder="003"><br>
    </div>
    <div class="col">
        <label>Full name</label><br>
        <input type="text" name="name" placeholder="user"><br>
    </div>

    <div class="col">
        <label>Email Address</label><br>
        <input type="text" name="email" placeholder="user@gmail.com"><br>
    </div>
    <div class="col">
        <label >User Name</label><br>
        <input type="text" name="username" placeholder="user123"><br>
    </div>
    <div class="col">
        <label>Temporary Password</label><br>
        <input type="password" name="password" placeholder="123456"><br>
    </div>

    <div class="col">
    <button>
                <span class="btnText">Create customer</span>
              </button>
    </div>
</form>
</div>


</body>