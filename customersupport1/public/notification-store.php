<?php

  include '../config/connection.php';
  session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

  //$query = "INSERT INTO notifications (notification_id, notification) VALUES ('$notification_id, '$notification')";

?>

<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/submit-a-blog-article.css">
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
    <a href="./team.php"><i class='bx bx-group'></i>Team</a>
  </li>
  
  <li>
    <a href="./reviews.php"><i class='bx bx-bookmark-heart'></i>Reviews</a>
  </li>
  
  <li>
    <a href="./calendar-tmp.php"><i class='bx bx-calendar'></i>Calendar</a>
  </li>
  <li>
    <a class="active" href="./notification-store.php"><i class='bx bx-envelope'></i>Notification Store</a>
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
<div class="common-not-cage" style="position:absolute;margin-left:18%;padding:1px 16px;height:1000px; margin-top: 8%">

<div class="create_notification">
  <form action="../src/notification-store.php" class="notification-writing" method="POST">
  <?php //if(isset($_GET['cheer'])) { ?>
    <!--<p class="cheer"><?php //echo $_GET['cheer'];?></p>-->
  <?php //} ?>
    <div class="not-topic">
    <h3 class="write-new-notification">Write New Notification</h3>
    </div><br />
    <div class="do-db">
    <textarea name="notification" id="" cols="165" rows="2" class="insert-notification" placeholder="Write new notification here..."></textarea>
    <div class="btn-form">
      <input type="submit" class="button-i-green" value="Send">
      <input type="submit" class="button-i-red" value="Cancel">
    </div>
    </div>
    <!-- <br /><br /> -->
    <!-- <div class="btn-form">
      <input type="submit" class="button" value="Cancel">
      <input type="submit" class="button" value="Send">
    </div> -->
  </form>
</div><br /><br /><br />

<div class="read-notifications">
  <div class="not-topic">
    <h3 class="write-new-notifications">Read Notifications</h3>
  </div><br /><br />
<table>
                <tr>
                  <th class="Email"></th>
                  <th class="msg"></th>
                  <th class="button"></th>
                </tr>
              <?php $query = "SELECT * FROM notifications";
$result = mysqli_query($conn, $query);

while($view=mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td style="width: auto; height: 60px"><b><?php echo $view['notification_id'];?></b></td>  <!--need to display cust_email here but currently showing id-->
    <td style="width: auto; height: 60px"></td><?php echo $view['notification'];?>
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  
  <?php
}
?>
</table>
</div>

</div>



</body>
</html>