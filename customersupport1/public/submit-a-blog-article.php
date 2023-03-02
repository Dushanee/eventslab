<?php

include '../config/connection.php';

session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];


// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
//   //header('Location:../public/home.php');   //why these?
//       $firstname = $_SESSION['fname'];
//       $lastname  = $_SESSION['lname'];
//       $pro_pic   = $_SESSION['pro_pic'];
?>


<!doctype html>
<html>
    <head>
        <title>Submit a blog article</title>
        <link rel="stylesheet" href="./css/submit-a-blog-article.css" />
        <link rel="stylesheet" href="./css/home.css" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php include '../public/top-bar.php';?>
    <div class="nav-bar" style="top: 8px;">

<ul>
  <li>
    <a href="./home.php">
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
    <a class="active" href="./submit-a-blog-article.php"><i class='bx bx-edit-alt' style='color:#8d8da7' ></i>Write a blog</a>
  </li>
 
  <li>
    <a href="./csmmessageportal.php"><i class='bx bx-message-rounded-dots'></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bx-log-out'></i>Logout</a>
  </li>
</ul>
</div>
<div class="to-left-the-common">
<div class="common">
        <div class="main-cage">
            <div class="top-cage">

                <div class="x">
                    <form action="./submit-a-blog-article.php" class="newArticle">
                        <input class="button" type="submit" style="margin-top: 30%;" value="NEW ARTICLE">
                    </form>
                </div>
                <div class="get-from-backend">
                    <div class="x"><a href="#"><b>Pending</b></a></div>
                    <div class="x"><a href="#"><b>Published</b></a></div>
                    <div class="x"><a href="#"><b>Draft</b></a></div>
                </div>
            </div><br />
            <div class="article-form">
                <form action="./submit-article" class="submit-article">
                    <div class="flex">
                    <label for="title" class="form"><b>Title</b></label>
                    <input type="text" class="insert" placeholder="Add article title...">
                    </div><br />
                    <div class="flex">
                    <label for="article-content" class="form"><b>Article Content</b></label>
                    <textarea class="insert" rows="30" cols="200" placeholder="Add article content..."></textarea>
                    </div><br />
                    <div class="flex">
                    <label for="featured-image" class="form"><b>Featured Image</b></label>
                    <input type="file" class="insert">
                    <!-- <input type="submit" class="button" value="SUBMIT"> -->
                    </div><br /><br />
                    <input type="checkbox" class="mark">Save and submit to publish<br /><br />
                    <div class="two-buttons">
                    <form class="newArticle" action ="#">
                        <input class="button" type="submit" value="SUBMIT">
                    </form>
                    <form action="#" class="newArticle">
                        <input class="button" type="submit" value="CANCEL">
                    </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>

<?php

// }else {
//   header("Location: ../public/home.php");
//   exit();
// }

?>