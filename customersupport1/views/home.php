<?php

include '../config/connection.php';


// session_start();
   
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
<link rel="stylesheet" href="./css/calendar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<link rel="stylesheet" href="./css/home.css">
</head>
<body>
  <?php include '../public/top-bar.php';?>

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
</div><br /><br />
<div class="username-cage">
  <h2 class="username"><b>Hello <?php echo $firstname.""?></b></h2>
</div>
<div class="to-left-the-common">
<div class="common">

  
  <div class="container0">
  <a href="./messages.php" class="go" style="text-decoration: none;">
  <div class="card">
    <div class="img">
      <!-- <img src="./images/1.png"> -->
      <div class="icon"><i class='bx bx-message-square-dots' style='color:#ffffff'  ></i></div>
      <div class="what">Forum Messages</div>
    </div>
    <div class="bot-text" style="display: flex;">
      <div class="frm-bc-end">10</div>
      <div class="bc-end-desc">Unread Messages</div>
    </div>
</a>
    <!-- <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">10 unread messages</p></div>
    </div> -->
    <!-- <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='./messages.php';">View</button>
      </div>
    </div> -->
  </div>
  <a href="./consult.php" class="go" style="text-decoration: none;">
  <div class="card">
    <div class="img">
      <!-- <img src="./images/2.png"> -->
      <div class="icon"><i class='bx bx-donate-heart'></i></i></div>
      <div class="what">Consultations</div>
    </div>
    <div class="bot-text" style="display: flex;">
      <div class="frm-bc-end">10</div>
      <div class="bc-end-desc">Unread Messages</div>
    </div>
</a>
    <!-- <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">3 new bookings</p></div>
    </div> -->
    <!-- <div class="bottom-text">
      <div class="btn">
        <button onclick="window.location.href='./consult.php';">View</button>
      </div>
    </div> -->
  </div>
  <a href="./blogSpot.php" class="go" style="text-decoration: none;">
  <div class="card">
    <div class="img">
      <!-- <img src="./images/3.png"> -->
      <div class="icon"><i class='bx bx-book-reader'></i></div>
      <div class="what">Blog</div>
    </div>
    <div class="bot-text" style="display: flex;">
      <div class="frm-bc-end">10</div>
      <div class="bc-end-desc">Unread Messages</div>
    </div>
</a>
    <!-- <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;">5 new articles</p></div>
    </div> -->
    <!-- <div class="bottom-text">
      <form class="btn" action="https://eventslabblogspot.my.canva.site/">
        <button >View</button>
    </form>
    </div> -->
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
  <!-- <a href="./csmprofile.php" class="go" style="text-decoration: none;">
  <div class="card2">
    <div class="img">
      <img src="./images/propic.png">
    </div> -->
    <!-- <div class="top-text">
      <div class="name0" style="margin-top: 10px;"><p style="padding:5px;"><p>
        See your profile

    </p>
    </div> -->
    <!-- <script type="text/javascript" src="./calendar.js"></script> -->
    <div id="calendar" class="calendar">
  <div class="calendar-title">
    <div class="calendar-title-text"></div>
    <div class="calendar-button-group">
      <button id="prevMonth">&lt;</button>
      <button id="today">Today</button>
      <button id="nextMonth">&gt;</button>
    </div>
  </div>
  <div class="calendar-day-name"></div>
  <div class="calendar-dates"></div>
</div>

<script>
  let currentDate = dayjs();
let daysInMonth = dayjs().daysInMonth();
let firstDayPosition = dayjs().startOf("month").day();
let monthNames = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
];
let weekNames = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
let dateElement = document.querySelector("#calendar .calendar-dates");
let calendarTitle = document.querySelector(".calendar-title-text");
let nextMonthButton = document.querySelector("#nextMonth");
let prevMonthButton = document.querySelector("#prevMonth");
let dayNamesElement = document.querySelector(".calendar-day-name");
let todayButton = document.querySelector("#today");
let dateItems = null;
let newMonth = null;

weekNames.forEach(function (item) {
  dayNamesElement.innerHTML += `<div>${item}</div>`;
});

function plotDays() {
  let count = 1;
  dateElement.innerHTML = "";

  let prevMonthLastDate = currentDate.subtract(1, "month").endOf("month").$D;
  let prevMonthDateArray = [];

  //plot prev month array
  for (let p = 1; p < firstDayPosition; p++) {
    prevMonthDateArray.push(prevMonthLastDate--);
  }
  prevMonthDateArray.reverse().forEach(function (day) {
    dateElement.innerHTML += `<button class="calendar-dates-day-empty">${day}</button>`;
  });

  //plot current month dates
  for (let i = 0; i < daysInMonth; i++) {
    dateElement.innerHTML += `<button class="calendar-dates-day">${count++}</button>`;
  }

  //next month dates
  let diff =
    42 - Number(document.querySelector(".calendar-dates").children.length);
  let nextMonthDates = 1;
  for (let d = 0; d < diff; d++) {
    document.querySelector(
      ".calendar-dates"
    ).innerHTML += `<button class="calendar-dates-day-empty">${nextMonthDates++}</button>`;
  }

  //month name and year
  calendarTitle.innerHTML = `${
    monthNames[currentDate.month()]
  } - ${currentDate.year()}`;
}

//highlight current date
function highlightCurrentDate() {
  dateItems = document.querySelectorAll(".calendar-dates-day");
  if (dateElement && dateItems[currentDate.$D - 1]) {
    dateItems[currentDate.$D - 1].classList.add("today-date");
  }
}

//next month button event
nextMonthButton.addEventListener("click", function () {
  newMonth = currentDate.add(1, "month").startOf("month");
  setSelectedMonth();
});

//prev month button event
prevMonthButton.addEventListener("click", function () {
  newMonth = currentDate.subtract(1, "month").startOf("month");
  setSelectedMonth();
});

//today button event
todayButton.addEventListener("click", function () {
  newMonth = dayjs();
  setSelectedMonth();
  setTimeout(function () {
    highlightCurrentDate();
  }, 50);
});

//set next and prev month
function setSelectedMonth() {
  daysInMonth = newMonth.daysInMonth();
  firstDayPosition = newMonth.startOf("month").day();
  currentDate = newMonth;
  plotDays();
}

//init
plotDays();
setTimeout(function () {
  highlightCurrentDate();
}, 50);

</script>

</body>
</html>

<?php

// }else {
//   header("Location: ../public/loginFront.php");
//   exit();
// }

?>