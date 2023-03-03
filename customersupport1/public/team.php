<?php
    require ('../config/connection.php');

    //session_start();

    session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

    $query_1 = "SELECT * FROM users WHERE user_type = 'admin'";
    $result_1 = mysqli_query($conn, $query_1);

    $query_2 = "SELECT * FROM users WHERE user_type = 'cs_manager'";
    $result_2 = mysqli_query($conn, $query_2);

    $query_3 = "SELECT * FROM users WHERE user_type = 'blog_manager'";
    $result_3 = mysqli_query($conn, $query_3);

    $query_4 = "SELECT * FROM service_providers";
    $result_4 = mysqli_query($conn, $query_4);

    $query_5 = "SELECT * FROM customers";
    $result_5 = mysqli_query($conn, $query_5);


?>

<!DOCTYPE html>
<html>
<head>
<title>Team</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a4f9e5cd76.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/team.css">
<link rel="stylesheet" href="./css/home.css">
</head>
<body>

<?php include '../public/top-bar.php';?>

<div class="nav-bar" style="top: 8px;">

<ul>
  <li>
    <a href="./home.php">
    <i class='bx bx-grid-alt' style='color:#8d8da7'></i>Dashboard</a>
  </li>
  <li>
    <a class="active" href="./team.php"><i class='bx bx-group'></i>Team</a>
  </li>
  
  <li>
    <a href="./reviews.php"><i class='bx bx-bookmark-heart'></i>Reviews</a>
  </li>
  
  <li>
    <a href="./calendar-tmp.php"><i class='bx bx-calendar'></i>Calendar</a>
  </li>
  <li>
    <a href="./notification-store.php"><i class='bx bx-envelope'></i>Notification Store</a>
  </li>

  <li>
    <a href="./submit-a-blog-article.php"><i class='bx bx-edit-alt' style='color:#8d8da7' ></i>Write a blog</a>
  </li>
 
  <li>
    <a href="./csmmessageportal.php"><i class='bx bx-message-rounded-dots'></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bx-log-out'></i>Logout</a>
  </li>
</ul>
</div><br /><br />
<div class="username-cage">
  <h2 class="username"><b>Hello <?php echo $firstname.""?></b></h2>
</div>
<div class="common-cage" style="position:absolute;margin-left:18%;padding:1px 16px;height:auto; margin-top: 8%">
<div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Administrator</h3>
</div>
<div class="sp-table">
  <table class="show-team">
    <tr class="main-row">
      <th class="id">ID</th>
      <th class="fname">First Name</th>
      <th class="lname">Last Name</th>
      <th class="email">Email</th>
      <th class="c-button"></th>
    </tr>
    <?php
            while($users = mysqli_fetch_assoc($result_1)) {
        ?>
                <tr class="data-row">
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['fname']; ?></td>
                    <td><?php echo $users['lname']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td>
                    <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
                    <i class='bx bx-edit-alt' style="color:#171720;"></i>
                    </a>
                    </form>
                </tr>

        <?php
            }
        ?>
      </td>
    </tr>
  </table>
  </div>
  </div><br /><br />
  <div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Customer Support Manager</h3>
</div>
<div class="sp-table">
  <table class="show-team">
    <tr class="main-row">
      <th class="id">ID</th>
      <th class="fname">First Name</th>
      <th class="lname">Last Name</th>
      <th class="email">Email</th>
      <th class="c-button"></th>
    </tr>
    <?php
            while($users = mysqli_fetch_assoc($result_2)) {
        ?>
                <tr class="data-row">
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['fname']; ?></td>
                    <td><?php echo $users['lname']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td>
                    <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
                    <!-- <i class='bx bx-edit-alt' style="color:#171720;"></i> -->
                    </a>
                    </form>
                </tr>

        <?php
            }
        ?>
      </td>
    </tr>
  </table>
  </div>
  </div><br /><br />
  <div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Blog Manager</h3>
</div>
<div class="sp-table">
  <table class="show-team">
    <tr class="main-row">
      <th class="id">ID</th>
      <th class="fname">First Name</th>
      <th class="lname">Last Name</th>
      <th class="email">Email</th>
      <th class="c-button"></th>
    </tr>
    <?php
            while($users = mysqli_fetch_assoc($result_3)) {
        ?>
                <tr class="data-row">
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['fname']; ?></td>
                    <td><?php echo $users['lname']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td>
                    <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
                    <i class='bx bx-edit-alt' style="color:#171720;"></i>
                    </a>
                    </form>
                </tr>

        <?php
            }
        ?>
      </td>
    </tr>
  </table>
  </div>
  </div><br /><br />
<div class="topic">
  <h3 class="team-mem">Service Providers</h3>
</div>
<div class="sp-table">
  <table class="show-team" style="width: 100%;">
        <tr class="main-row">
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        <?php
            while($service_providers = mysqli_fetch_assoc($result_4)) {
        ?>
                <tr class="data-row">
                    <td><?php echo $service_providers['sp_id']; ?></td>
                    <td><?php echo $service_providers['sp_name']; ?></td>
                    <td><?php echo $service_providers['sp_email']; ?></td>
                    <td>
                    <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
                    <i class='bx bx-edit-alt' style="color:#171720;"></i>
                    </a>
                    </form>
                </tr>

        <?php
            }
        ?>


    </table>
</div>
<!-- </div> <br /><br /> -->

<div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Customers</h3>
</div>
<div class="sp-table">
  <table class="show-team">
    <tr class="main-row">
      <th class="id">ID</th>
      <th class="fname">First Name</th>
      <th class="lname">Last Name</th>
      <th class="email">Email</th>
      <th class="c-button"></th>
    </tr>
    <?php
            while($customers = mysqli_fetch_assoc($result_5)) {
        ?>
                <tr class="data-row">
                    <td><?php echo $customers['cust_id']; ?></td>
                    <td><?php echo $customers['cust_fname']; ?></td>
                    <td><?php echo $customers['cust_lname']; ?></td>
                    <td><?php echo $customers['cust_email']; ?></td>
                    <td>
                    <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
                    <i class='bx bx-edit-alt' style="color:#171720;"></i>
                    </a>
                    </form>
                </tr>

        <?php
            }
        ?>
      </td>
    </tr>
  </table>  
</div>
</div><br /><br />

</div>

</body>
</html>


