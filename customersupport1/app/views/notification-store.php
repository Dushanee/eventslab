<?php

// include '../back/db_conn.php';
// //include 'viewmsg.php';

// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
<title>Notification store</title>
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

    <h6> Amaya Wedamulla </h6>
</div>
<div class="nav-bar" style="top: 8px;">
<ul>
<div class="eventslab"><img src="./images/logo 1.png"></div>
  <li>
    <a href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
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
    <a class="active" href="./notification-store.php"><i class='bx bxs-envelope' ></i>Notification Store</a>
    
  </li>
  
  <li>
    <a href="./csmmessageportal.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
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
                  <th class="notid" style="width: 80px"></th>
                  <th class="not" style="width: 600px"></th>
                  <th class="button" style="text-align: right"></th>
                </tr>
              <?php //$query = "SELECT * FROM notifications";
//$result = mysqli_query($conn, $query);

//while($view=mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td style="width:5px; height:100px text-align: left"><b>1</b></td><!--<?php echo $view['notid'];?>-->
    <td style="width: 400px; height:100px; text-align: left">Happy Birthday! Celebrate your birthday at your dream hotel with loving ones. Quick party organizations are here! visit us on EventsLab.lk today.</td><!--<?php echo $view['not'];?>-->
    <td style="text-align: right"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bxs-send'style="font-size: 16px; color:white"></i></a></td>
  </tr>
  <tr>
    <td style="width:5px; height:100px text-align: left"><b>2</b></td><!--<?php echo $view['notid'];?>-->
    <td style="width: 400px; height:100px; text-align: left">Hello there! wanna spend new year's eve with loved ones? whole new event offerings are here!! visit us on EventsLab.lk today.</td><!--<?php echo $view['not'];?>-->
    <td style="text-align: right"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bxs-send'style="font-size: 16px; color:white"></i></a></td>
  </tr>
  <tr>
    <td style="width:5px; height:100px text-align: left"><b>3</b></td><!--<?php echo $view['notid'];?>-->
    <td style="width: 400px; height:100px; text-align: left">Happy New Year! Spend today with loved ones. Plan your new year parties in a fabulous manner with EventsLab.lk.</td><!--<?php echo $view['not'];?>-->
    <td style="text-align: right"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bxs-send'style="font-size: 16px; color:white"></i></a></td>
  </tr>
  <tr>
    <td style="width:5px; height:100px text-align: left"><b>4</b></td><!--<?php echo $view['notid'];?>-->
    <td style="width: 400px; height:100px; text-align: left">Love is in the air! Make this Valentine's unforgettable for you and your loved ones. Check out on valentine's special offers from EventLab.lk. Happy planning!</td><!--<?php echo $view['not'];?>-->
    <td style="text-align: right"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bxs-send'style="font-size: 16px; color:white"></i></a></td>
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
//     header("Location: ../front/index.php");
//     exit();
// }

?>