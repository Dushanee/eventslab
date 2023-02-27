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
<link rel="stylesheet" href="./css/team.css">
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


<div class="common-cage">
<div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Service Providers</h3>
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
    <tr class="sub-row">
      <td>1</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>2</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>3</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
  </table>
</div>
</div><br /><br />
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
    <tr class="sub-row">
      <td>1</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>2</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>3</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
  </table>
</div>
</div>
<div class="table-cage"><br /><br />
<div class="topic">
  <h3 class="team-mem">Blog Managers</h3>
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
    <tr class="sub-row">
      <td>1</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>2</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
                    <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
    <tr class="sub-row">
      <td>3</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
        <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
  </table>
</div>
</div><br /><br />

<div class="table-cage">
<div class="topic">
  <h3 class="team-mem">Admin</h3>
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
    <tr class="sub-row">
      <td>1</td>
      <td>Pabodhi</td>
      <td>Herath</td>
      <td>hmpabodhiherath@gmail.com</td>
      <td>
        <form action="msg-window">
          <a href="./liveChat.php" class="message-btn">
          <i class='bx bx-message-square-edit' style='color:#0e0e0e'  ></i>
          </a>
        </form>
      </td>
    </tr>
</div>
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