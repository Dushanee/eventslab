<?php

// include '../back/db_conn.php';
// //include 'viewmsg.php';

// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
</head>
<body>

<?php include '../public/top-bar.php'; ?>

<div class="nav-bar" style="top: 8px;">

<ul>
  <li>
    <a class="active" href="./home.php">
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
</div>
<div class="common-msg-cage" style="position:absolute;margin-left:18%;padding:1px 16px;height:1000px; margin-top: 8%;">
<div class="message">
              <table style="width: 100%;">
                <tr>
                  <th class="Email" style="width: 300px"></th>
                  <th class="msg" style="width: 400px"></th>
                  <th class="button"></th>
                </tr>
              <?php $query = "SELECT * FROM customer_forum";
$result = mysqli_query($conn, $query);

while($view=mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td style="width: 300px; height: 60px"><b><?php echo $view['cust_id'];?></b></td>  <!--need to display cust_email here but currently showing id-->
    <td style="width: 400px; height: 60px"></td><?php echo $view['forum_message'];?>
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  
  <?php
}
?>
</table>



</div>

</body>
</html>

<?php

// }else {
//     header("Location: ./index.php");
//     exit();
// }

?>