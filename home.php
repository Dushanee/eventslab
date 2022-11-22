<?php 
   include 'header.php';
   /*session_start();*/
   
   if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<div class = "column-1">
    <ul>
        <li><a class = "msg" href = "#">Messages</a></li>
        <li><a href = "#">Blog</a></li>
        <li><a href = "#">Review</a></li>
        <li><a href = "#">Overview</a></li>
        <li><a href = "#">Notifications Store</a></li>            
        <li><a href = "#">Settings</a></li>                
        <li><a  class = "logout" href = "logout.php">Logout</a></li>        
    </ul>
</div>
        
    

<?php

}else {
    header("Location: index.php");
    exit();
}

include 'footer.php';
?>