<?php

include '../config/connection.php';


//session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
//   //header('Location:../public/home.php');   //why these?
//       $firstname = $_SESSION['fname'];
//       $lastname  = $_SESSION['lname'];
//       $pro_pic   = $_SESSION['pro_pic'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<link rel="stylesheet" href="./css/home.css">
</head>
<body>
<div class="nav-bar" style="top: 8px;">

<ul>
  <!-- <div class="nav-bar-icons" class="active"> -->
    <li class="list-item">
      <a class="active" href="./home.php">
      <i class='bx bx-grid-alt' style='color:#8d8da7'></i>Dashboard</a>
    </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./team.php"><i class='bx bx-group'></i>Team</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./reviews.php"><i class='bx bx-bookmark-heart'></i>Reviews</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./calendar-tmp.php"><i class='bx bx-calendar'></i>Calendar</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./notification-store.php"><i class='bx bx-envelope'></i>Notification Store</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./submit-a-blog-article.php"><i class='bx bx-edit-alt' style='color:#8d8da7' ></i>Write a blog</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./csmmessageportal.php"><i class='bx bx-message-rounded-dots'></i>Message Portal</a>
  </li>
  <!-- </div> -->
  <!-- <div class="nav-bar-icons"> -->
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bx-log-out'></i>Logout</a>
  </li>
  <!-- </div> -->
</ul>
</div>

</body>
</html>

<?php

// }else {
// //   header("Location: ../public/loginFront.php");
//   exit();
// }

?>