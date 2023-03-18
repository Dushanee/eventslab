

<title>Home</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<link rel="stylesheet" href="<?php echo BASEURL ?>/css/csm/dashboard.css">
</head>
<body>
<div class="topbar">
        
        <!-- <div class="logo">
            <img src="./images/logo 1.png">
        </div>  -->
   
    
    <div class="search0">
      <h1 class="username">Welcome back,  !</h1>
    </div>
    <i class='bx bxs-bell'></i>
    
    <div class="user">
        <img src="./images/propic.png" alt="propic">
        
    </div>

    <h6> hi</h6>
</div>
<div class="nav-bar" style="top: 8px;">

<ul>
  <li>
    <a class="active" href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
  </li>
  <li>
    <a href="<?php echo BASEURL ?>/adminFunction/team"><i class='bx bxs-group' ></i>Team</a>
    
  </li>

  
  
  <li>
    <a href="./reviews.php"><i class='bx bxs-bookmark-heart' ></i>Reviews</a>
    
  </li>
  
  
  <li>
    <a href="./calendar-tmp.php"><i class='bx bxs-calendar' ></i>Calendar</a>
    
  </li>
  <li>
    <a href="./notification-store.php"><i class='bx bxs-envelope' ></i>Notification Store</a>
    
  </li>
 
  <li>
    <a href="./chat.php"><i class='bx bxs-conversation' ></i>Live Chat</a>
  </li>
  <li>
    <a href="../back/logout.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li>
</ul>
</div>



<div class="common" style="position:absolute;margin-left:18%;padding:1px 16px;height:1000px; top: 50px">
  
  <div class="container0" style="margin-top: 100px;">
  <div class="card">
    <div class="img">
      <img src="./images/1.png">
    </div>
    <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">10 unread messages</p></div>
    </div>
    <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='./messages.php';">View</button>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="img">
      <img src="./images/2.png">
    </div>
    <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">3 new bookings</p></div>
    </div>
    <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='./consult.php';">View</button>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="img">
      <img src="./images/3.png">
    </div>
    <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">5 new articles</p></div>
    </div>
    <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='./blog.php';">View</button>
      </div>
    </div>
  </div>
  </div>
  <div class="container1">
  <div class="card1">
    <div class="chart">
    <canvas id="myChart" style="width:100%;max-width: 720px; height: 320px;">
         <script>
      var xValues = [50,60,70,80,90,100,110,120,130,140,150];
      var yValues = [7,8,8,9,9,9,10,11,14,14,15];

      new Chart("myChart", {
      type: "line",
      data: {
      labels: xValues,
      datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#7281A3",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
        }]
        },
        options: {
            legend: {display: false},
            scales: {
             yAxes: [{ticks: {min: 6, max:16}}],
               }
         }
            });
        </script>

    </canvas>

    </div>
    <div class="bottom-text">
      <div class="labels" style="float: right; align-items: left;">
        <p style="color: #210e54; font-size: 12px; align-text: left">x-> Number of conversations<br />y-> Date and Time<br /></p>
      </div>
    </div>
  </div>
  <div class="card2">
    <div class="img">
      <img src="./images/propic.png">
    </div>
    <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;"><p>
        See your profile

    </p>
    </div>
    </div>
    <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='#';">View</button>
      </div>
    </div>
  </div>

</div>


</body>




<!-- // }else {
//     header("Location: ../front/index.php");
//     exit();
// }

?> -->