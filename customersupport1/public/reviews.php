<?php

include '../config/connection.php';
session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

                            // $_SESSION['cust_id'] = $_row['cust_id'];
                            // $_SESSION['cust_email'] = $_row['cust_email'];

                            //echo $_SESSION['cust_email'];



// $query_2 = "SELECT * FROM reviews INNER JOIN customers ON reviews.cust_Id = customers.cust_id";
// $result_2=mysqli_query($conn, $query_2);


?>

<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/review-cards.css">
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
    <a class="active" href="./reviews.php"><i class='bx bx-bookmark-heart'></i>Reviews</a>
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
</div>

<div class="common" style="position:absolute;margin-left:29%;padding:1px 16px;height:1000px; top: 50px">
<?php

$query_2 = "SELECT * FROM reviews INNER JOIN customers ON reviews.cust_Id = customers.cust_id";
$result_2=mysqli_query($conn, $query_2);

echo '<div class="wrapper">';

       $j = 0;

        if($result_2 == true){
         if(mysqli_num_rows($result_2)>0){
             while($row = mysqli_fetch_assoc($result_2)){
               $cust_id  = $row['cust_id']; 
               $cust_email  = $row['cust_email'];  
               $review = $row['review'];
               $time_stamp = $row['time_stamp'];

              // $sql1 = "SELECT MIN(option_id) FROM options WHERE pack_id = $pack_id";
              // $result1 = mysqli_query($conn,$sql1);
              // if(mysqli_num_rows($result1)>0){
              //   while($row = mysqli_fetch_assoc($result1)){
              //     $min_option_id = $row['MIN(option_id)'];
              //   }
              // }
                       
                         $j++;

                       echo 
         
                       "<div class='review-card'>".
                       
                         //"<img id='accountImg'"."src='../../images1/venue/venue".$j."'jpeg' alt='Avatar'>".
                         "<div class='cust_email'>".
                         "<h4><b>".$cust_email."</b></h4>".
                         "</div>".
                        // "<div class='container1'>".
                         //"<img id='locationImg'"." src='../../images1/location_district_30px.png'>". 
                         "<p>".$review."</p>".
                         "<p>".$time_stamp."</p>".

                         //"<img id='ratingImg'"."src=../../images1/rating/ranking".array_search(max($rating),$rating).".jpg>".
               
                        //  "<form action='food_provider_shopPage.php' method='POST'>".
                        //  "<input type='hidden' name='sp_id' value=".$sp_id." />".
                        //  "<input type='hidden' name='pack_id' value=".$pack_id." />".
                        //  "<input type='hidden' name='min_option_id' value=".$min_option_id." />".
                        //  "<input type='submit' name='viewshop' id='viewshop' value='view'>".
                        // //  "<span id='backgroundSubmit'></span>".
                        //  "</form>".            
                        // "</div>".
                        "</div>";
                    }
                    echo '</div>'; 
                }
            }         

// if (mysqli_num_rows($result_2)>0) {
// while ($reviews = mysqli_fetch_assoc($result_2)) {

//    echo "<div class='view-cage'>";
//    echo "<h4>".$reviews["cust_Id"]."</h4>";
//    echo "<h4>".$reviews["cust_email"]."</h4>";
//    echo "<p>".$reviews["review"]."</p>";
//    echo "</div>";
//   }
// }
?>

</div>
</body>
</html>

<?php 
  mysqli_close($conn);
?>
