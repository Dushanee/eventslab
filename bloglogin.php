<?php 

    session_start();

    include "db_conn.php";

    if(isset($_POST["username"]) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['username']);
        $pass = validate($_POST['password']);

        if(empty($uname)) {
            header("Location: bloglog.php?error=User Name is required");
            exit();
        }else if(empty($pass)) {
            header("Location: bloglog.php?error=Password is required");
            exit();
        }else {
            $sql = "SELECT * FROM blog_managers WHERE username='$uname' AND repassword='$repass'";
        }

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['repassword'] = $row['repassword'];
                $_SESSION['pp'] = $row['pp'];
                header("Location: bloghome.php");
                exit();
            }

        }else {
            header("Location: bloglog.php?error=Incorrect username or password");
            exit();
        }

    }else {
        header("Location: bloglog.php?error");
        exit();
    }

?>