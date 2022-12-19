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
            header("Location: index.php?error=User Name is required");
            exit();
        }else if(empty($pass)) {
            header("Location: index.php?error=Password is required");
            exit();
        }else {
            $sql = "SELECT * FROM customersupport WHERE username='$uname' AND password='$pass'";
        }

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['re_password'] = $row['re_password'];
                $_SESSION['pp'] = $row['pp'];
                header("Location: home0.php");
                exit();
            }

        }else {
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }

    }else {
        header("Location: index.php?error");
        exit();
    }

?>