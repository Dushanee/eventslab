<?php

// include '../back/db_conn.php';
// //include 'viewmsg.php';

// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<link rel="stylesheet" href="./css/home.css">
</head>
<body>
<div class="topbar">
        
        <div class="logo">
            <img src="./images/logo 1.png">
        </div> 
   
    
    <div class="search0">
      <h1 class="username">Welcome back, Mihiri!</h1>
    </div>
    <i class='bx bxs-bell'></i>
    
    <div class="user">
        <img src="./images/propic.png" alt="propic">
        
    </div>

    <h6> Mihiri Thathsara </h6>
</div>
<div class="nav-bar" style="top: 8px;">

<ul>
  <li>
    <a class="active" href="./bm-home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
  </li>
  <li>
    <a href="https://eventslabblogspot.my.canva.site/"><i class='bx bxs-group' ></i>Blog</a>
    
  </li>
  
  <li>
    <a href="./recievedArticles.php"><i class='bx bxs-bookmark-heart' ></i>Recieved Articles</a>
    
  </li>
  
  
  <!-- <li>
    <a href="./calendar-tmp.php"><i class='bx bxs-calendar' ></i>Calendar</a>
    
  </li>
  <li>
    <a href="./notification-store.php"><i class='bx bxs-envelope' ></i>Notification Store</a>
    
  </li>  -->
 
  <li> 
    <a href="./csmmessageportal.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./bm-login.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li> 
</ul>
</div>



<div class="common" style="position:absolute;margin-left:18%;padding:1px 16px;height:1000px; top: 50px">
  
<div class="contentPopUp" >
            <div class="content">
                <h2>Send a Message</h2>
                <p style="width: 20rem" align="center">They will respond as soon as they see your message.</p>
            </div>

            <form action="./messageForm.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Admin">Admin</button>
                <button type="submit" class="buttonInPopUp" value="Service Providers">Service Providers</button>
            </form>
            <form action="./reply.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Reply" style="margin-bottom: 5%;">Reply</button>
            </form>

        </div>

</div>


</body>
</html>

<?php

// }else {
//     header("Location: ../front/index.php");
//     exit();
// }

?>