<?php

include 'db_conn.php';
//include 'viewmsg.php';

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
        <a href="dashboard.php">
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
       <a href="msgbox0.php">
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
       <i class='bx bxs-calendar'></i>
         <span class="links_name">Calender</span>
       </a>
       <span class="tooltip">Calender</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-notification' ></i>
         <span class="links_name">Notifications store</span>
       </a>
       <span class="tooltip">Notifications store</span>
     </li>
     <li>
       <a href="#">
       <i class='bx bxs-message-dots'></i>
         <span class="links_name">Live chat</span>
       </a>
       <span class="tooltip">Live chat</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="./images/santaq.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['username'];?></div>
           </div>
         </div>
         <a href="logout.php">
         <i class='bx bx-log-out' id="log_out"></i>
         </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
  <div class="text">
             <div class="name">Welcome back, <?php echo $_SESSION['username'];?></div>
             <div class="job"></div><br>
             <div class="message">
              <table>
                <tr>
                  <th class="UName"></th>
                  <th class="Review"></th>
                  <th class="button"></th>
                </tr>
              <?php $query = "SELECT * FROM reviews";
$result = mysqli_query($conn, $query);

while($view=mysqli_fetch_assoc($result)) {
?>
  <tr>
    <td><b><?php echo $view['UName'];?></b></td>
    <td><?php echo $view['Review'];?></td>
    <td><a href="Rateform.php" onclick="submitForm()"><i class='bx bxs-star'></i></a></td>
  </tr>
  <?php
}
?>
</table>



</div>
  </div>
           
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
    header("Location: index.php");
    exit();
}

?>