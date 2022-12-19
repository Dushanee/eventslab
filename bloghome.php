<?php

include 'db_conn.php';

session_start();
   
if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="./css/homestyle0.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
  <div class="sidebar">
    <div class="logo-details">
    <i class='bx bxs-balloon'></i>
        <div class="logo_name">EventsLab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
        <i class='bx bxs-grid-alt' ></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
       <i class='bx bxs-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-conversation' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="blog.php">
       <i class='bx bxs-book-reader' ></i>
         <span class="links_name">Blog</span>
       </a>
       <span class="tooltip">Blog</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-comment-detail' ></i>
         <span class="links_name">Review</span>
       </a>
       <span class="tooltip">Review</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-chart' ></i>
         <span class="links_name">Overview</span>
       </a>
       <span class="tooltip">Overview</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-notification' ></i>
         <span class="links_name">Notifications store</span>
       </a>
       <span class="tooltip">Notifications store</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="./images/santaq.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Hello, <?php echo $_SESSION['username'];?></div>
             <div class="job">how's it going?</div>
           </div>
         </div>
         <a href="logout.php">
         <i class='bx bx-log-out' id="log_out"></i>
         </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when we click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>

<?php

}else {
    header("Location: blogreg.php");
    exit();
}

?>