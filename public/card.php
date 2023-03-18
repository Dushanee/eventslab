<?php
    require '../config/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Card_cage</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="./css/card.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card-cage" style="position: absolute;">

        <div class="card">
          <?php
          
          $sql_1 = "SELECT COUNT(forum_id) FROM customer_forum WHERE status = 'unread'";
          $result_1 = mysqli_query($conn,$sql_1);

          if(mysqli_num_rows($result_1) > 0){
            while($row = mysqli_fetch_assoc($result_1)){
              $unread_forum_count = $row["COUNT(forum_id)"];
              //echo $unread_forum_count;
            }
          }
          
          ?>

            <div class="ico-cage">
                <i class='bx bxs-message' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br /><br />
                <div class="backend"><h1><?php echo $unread_forum_count ?></h1></div>
                <div class="backend-desc"><h4><a href="./messages.php" class="go" style="text-decoration: none;">Unread Forums</a></h4></div>
            </div>
        </div>
        
        <div class="card">
        <?php
          
          $sql_2 = "SELECT COUNT(review_id) FROM reviews WHERE status = 'new'";
          $result_2 = mysqli_query($conn,$sql_2);

          if(mysqli_num_rows($result_2) > 0){
            while($row = mysqli_fetch_assoc($result_2)){
              $new_review_count = $row["COUNT(review_id)"];
              //echo $unread_forum_count;
            }
          }
          
          ?>
            <div class="ico-cage">
                <?php
                    include '../src/avg_rating_calc.php';
                ?>
            <i class='bx bxs-bookmark-heart' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br /><br />
                <div class="backend"><h1><?php echo $new_review_count ?></h1></div>
                <div class="backend-desc"><h4><a href="./reviews.php" class="go" style="text-decoration: none;">New Reviews</a></h4></div>
            </div>
        </div>
        
        <div class="card">
            <div class="ico-cage">
                <i class='bx bxs-book-reader' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br/><br />
                <div class="backend"><h1>5</h1></div>
                <div class="backend-desc"><h4><a href="./blogSpot.php" class="go" style="text-decoration: none;">Read Blog</a></h4></div>
            </div>
        </div>
        <div class="card">
            
            <div class="ico-cage">
            <i class='bx bxs-star-half' style="color: #ffffff"></i>
            </div>
            <div class="ico-intro-cage">
                <br/><br />
                <div class="backend"><h1><?php echo $avg_rating_percent ?>%</h1></div>
                <div class="backend-desc"><h4><a href="./blogSpot.php" class="go" style="text-decoration: none;">Ratings</a></h4></div>
            </div>
        </div>

    </div>
</body>
</html>