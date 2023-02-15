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

<div class="topbar">
        
        <div class="logo">
            <img src="./images/logo 1.png">
        </div> 
    <div class="search0">
      <h1 class="username">Welcome back, Amaya!</h1>
    </div>
    <i class='bx bxs-bell'></i>
    
    <div class="user">
        <img src="./images/propic.png" alt="propic">
        
    </div>

    <h6> Amaya Wedamulla</h6>
</div>


<div class="nav-bar" style="top:8px;">

<ul>
<div class="eventslab"><img src="./images/logo 1.png"></div>
  <li>
    <a class="active" href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
  </li>
  <li>
    <a href="./team.php"><i class='bx bxs-group' ></i>Team</a>
    
  </li>
  
  <li>
    <a href="./reviews.php"><i class='bx bxs-bookmark-heart' ></i>Reviews</a>
    
  </li>
  
  <li>
    <a href="./calendar.php"><i class='bx bxs-calendar' ></i>Calendar</a>
    
  </li>
  <li>
    <a href="./notification-store.php"><i class='bx bxs-envelope' ></i>Notification Store</a>
    
  </li>
  
  <li>
    <a href="./chat.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li>
</ul>
</div>


<div class="common" style="position:absolute;margin-left:29%;padding:1px 16px;height:1000px; top: 50px">
<div class="message">
              <table>
                <tr>
                  <th class="Email" style="width: 300px"></th>
                  <th class="msg" style="width: 400px"></th>
                  <th class="button"></th>
                </tr>
              <?php //$query = "SELECT * FROM fromCustomers";
// $result = mysqli_query($conn, $query);

// while($view=mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td style="width: 300px; height: 60px"><b>chathuni@hulkzone.com</b></td> <!--<?php echo $view['Email'];?>-->
    <td style="width: 400px; height: 60px">How can I get help with organizing our company get-together? (as I don't have any idea of doing that!)</td><!--<?php echo $view['msg'];?>-->
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  <tr>
    <td style="width: 300px; height: 60px"><b>pabodihera@gmail.com</b></td> <!--<?php echo $view['Email'];?>-->
    <td style="width: 400px; height: 60px">My recent package doesn't display on the site. How to fix?</td><!--<?php echo $view['msg'];?>-->
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  <tr>
    <td style="width: 300px; height: 60px"><b>dahamsanjeewa@yahoo.com</b></td> <!--<?php echo $view['Email'];?>-->
    <td style="width: 400px; height: 60px">need help with adding a new package.</td><!--<?php echo $view['msg'];?>-->
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  <tr>
    <td style="width: 300px; height: 60px"><b>tharushiche@gmail.com</b></td> <!--<?php echo $view['Email'];?>-->
    <td style="width: 400px; height: 60px">cannot access the venue side on your site.</td><!--<?php echo $view['msg'];?>-->
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr><br />
  <tr>
    <td style="width: 300px; height: 60px"><b>hashinidilaksha@gmail.com</b></td> <!--<?php echo $view['Email'];?>-->
    <td style="width: 400px; height: 60px">Can I do a bank payment without using payPal?</td><!--<?php echo $view['msg'];?>-->
    <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td>
  </tr>
  <?php
//}
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