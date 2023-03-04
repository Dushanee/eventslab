<?php

include '../config/connection.php';

session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/review-cards.css">
</head>
<body>

<?php include '../public/top-bar.php'; ?>

<div class="nav-bar" style="top: 8px;">

<ul>
  <!-- <div class="nav-bar-icons" class="active"> -->
    <li class="list-item">
      <a href="./home.php">
      <i class='bx bx-grid-alt'></i>Dashboard</a>
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
    <a href="./messages.php" class="active"><i class='bx bx-message' style='color:#8d8da7'  ></i>Customer Forums</a>
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

<div class="common-review-cage" style="position:absolute;padding:1px 16px;height:1000px; top: 50px">
<div class="username-cage-in-reviews">
  <h2 class="username"><b>Hello, <?php echo $firstname.""?>!</b></h2>
</div>


<?php

$query_2 = "SELECT * FROM customer_forum INNER JOIN customers ON customer_forum.cust_Id = customers.cust_id";
$result_2=mysqli_query($conn, $query_2);

echo '<div class="wrapper">';

       $j = 0;

        if($result_2 == true){
         if(mysqli_num_rows($result_2)>0){
             while($row = mysqli_fetch_assoc($result_2)){
               $cust_id  = $row['cust_id']; 
               $cust_email  = $row['cust_email'];  
               $forum_subject = $row['forum_subject'];
               $forum_message = $row['forum_message'];
               $time_stamp = $row['time_stamp'];
               
               
               $j++;

                       echo 
                       "<a href='reply.php'>".
                       "<div class='review-card'>".
                       "<div class='cust_email'>".
                         "<h4><b>".$cust_email."</b></h4>".
                         "</div><br />".

                         "<p>".$forum_subject."</p>".
                         "<p>".$forum_message."</p>".
                         "<p>".$time_stamp."</p>".

                         "</div></a><br />";
                         "</a>";
                    }
                    echo '</div>'; 
                }
            }         

      ?>
      
<?php 
  mysqli_close($conn);
?>



</div>

</body>
</html>

<?php

// }else {
//     header("Location: ./index.php");
//     exit();
// }

?>