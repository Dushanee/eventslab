<?php

// include '../back/db_conn.php';
// //include 'viewmsg.php';

// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
<title>Team</title>
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

<div class="nav-bar" style="top:8px;">

<ul>
<div class="eventslab"><img src="./images/logo 1.png"></div>
  <li>
    <a href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
  </li>
  <li>
    <a class="active" href="./team.php"><i class='bx bxs-group' ></i>Team</a>
    
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
    <a href="./csmmessageportal.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li>
</ul>
</div>


<div class="common" style="position:absolute;margin-left:20%;padding:1px 16px;height:1000px; top: 50px">


<div class="outer-t">
<span class="one-t"><i class='bx bxs-folder' style='color:#210e54'  ></i><span class="name-t">Administrators</span><div class="value"><b>php Table</b></div></span>
  <span class="two-t"><i class='bx bxs-folder-open' style='color:#210e54'  ></i><span class="name-t">Customer Support Managers</span>
    <div class="value" style="margin-left: 40px">
        <table>
        <tr>

          <th class="id"></th>
          <th class="firstname" style="width: 50px"></th>
          <th class="lastname" style="width: 200px"></th>
          
        </tr>
      <?php //$query = "SELECT * FROM customersupport";
//$result = mysqli_query($conn, $query);

//while($view=mysqli_fetch_assoc($result)) {
?>
<tr>
<td style="width: 20px; height: 30px; text-align:left"></td><!--<?php echo $view['id'];?>-->
<td style="width: 50px; height: 30px; text-align:left"></td><!--<?php echo $view['firstname'];?>-->
<td style="width: 200px; height: 30px; text-align:left;"></td><!--<?php echo $view['lastname'];?>-->$_COOKIE

</tr>
<tr>
<td style="width: 20px; height: 30px; text-align:left"></td><!--<?php echo $view['id'];?>-->
<td style="width: 50px; height: 30px; text-align:left"></td><!--<?php echo $view['firstname'];?>-->
<td style="width: 200px; height: 30px; text-align:left;"></td><!--<?php echo $view['lastname'];?>-->$_COOKIE

</tr>
<tr>
<td style="width: 20px; height: 30px; text-align:left"></td><!--<?php echo $view['id'];?>-->
<td style="width: 50px; height: 30px; text-align:left"></td><!--<?php echo $view['firstname'];?>-->
<td style="width: 200px; height: 30px; text-align:left;"></td><!--<?php echo $view['lastname'];?>-->$_COOKIE

</tr>
<?php
//}
?>
</table>
    </div>
  </span>
  <span class="three-t"><i class='bx bxs-check-circle' style='color:#210e54'  ></i><span class="name-t">Service Providers</span><div class="value"><b>php Table</b></div></span>
</div>

<div class="outer1-t">
<span class="one1-t"><i class='bx bxs-folder' style='color:#210e54'  ></i><span class="name-t">Customers</span><div class="value"><b>php Table</b></div></span>
  <span class="two1-t"><i class='bx bxs-folder-open' style='color:#210e54'  ></i><span class="name-t">Bloggers</span><div class="value"><b>php Table</b></div></span>
  <span class="three1-t"><i class='bx bxs-check-circle' style='color:#210e54'  ></i><span class="name-t">Blog Managers</span><div class="value"><b>php Table</b></div></span>
</div>

</body>
</html>

<?php

// }else {
//     header("Location: ../front/index.php");
//     exit();
// }

?>