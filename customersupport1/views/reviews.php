<?php

include '../config/connection.php';

$query_1 = "SELECT * FROM reviews";
$result_1 = mysqli_query($conn, $query_1);

$query_2 = "SELECT cust_email FROM customers c INNER JOIN reviews r ON cust_Id = id WHERE cust_id = $cust_id";


?>

<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
    <a href="./team.php"><i class='bx bx-group'></i>Team</a>
  </li>
  
  <li>
    <a class="active" href="./reviews.php"><i class='bx bx-bookmark-heart'></i>Reviews</a>
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

<div class="common" style="position:absolute;margin-left:29%;padding:1px 16px;height:1000px; top: 50px">
<?php
while ($reviews = mysqli_fetch_assoc($result_1)) {
?>
  <?php echo "<div class='view-cage'>";?>
  <?php echo "<h4>".$reviews["cust_Id"]."</h4>";?>
  <?php echo "<h4>".$customers["cust_email"]."</h4>";?>
  <?php echo "<p>".$reviews["review"]."</p>";?>
  <?php echo "</div>";?>
  <?php
      }
  ?>
</div>
</body>
</html>

<?php 
  mysqli_close($conn);
?>
