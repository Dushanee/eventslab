<?php

include 'db_conn.php';

session_start();
   
if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>HOME</title>
        <link rel = "stylesheet" type = "text/css" href = "./css/homestyle.css" />
    </head>
    <body>
    <div class = "ribbon" style = "background: rgba(114, 129, 163, 0.76); position: fixed; height: 114px; width: 100%; margin-top: 0px margin-left: 0px;">
        <div class = "logo">
            #
        </div>
        <div class = "heading">
            <div class = "pp"></div>
            <h1 style = "text-align: right; margin-right: 80px; font-size: 24px; color:#fff; font-family: 'Inter', sans-serif; margin-top: 45px;}">Welcome Back, <?php echo $_SESSION['username'];?></h1>
        </div>
    </div>


<?php

}else {
    header("Location: index.php");
    exit();
}

?>