<?php

include '../config/connection.php';


session_start();
   
if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
  //header('Location:../public/home.php');   //why these?
      $firstname = $_SESSION['fname'];
      $lastname  = $_SESSION['lname'];
      $pro_pic   = $_SESSION['pro_pic'];
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
      <h1 class="username">Welcome back, <?php echo $firstname.""?>!</h1>
    </div>
    <i class='bx bxs-bell'></i>
    
    <div class="user">
        <img src="./images/<?php echo $pro_pic ?>" alt="propic">  
    </div>

    <h6><?php echo $firstname." ".$lastname?></h6>
</div>
</body>
</html>

<?php

}else {
//   header("Location: ../public/loginFront.php");
  exit();
}

?>