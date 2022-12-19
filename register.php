<?php 

if(isset($_POST['pass']) && 
   isset($_POST['uname']) &&  
   isset($_POST['repass'])){

    include "./db_conn.php";

    $pass = $_POST['pass'];
    $uname = $_POST['uname'];
    $repass = $_POST['repass'];

    $data = "repass=".$repass."&uname=".$uname;
    
    if (empty($pass)) {
    	$em = "Password is required";
    	header("Location: ./blogreg.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "Username is required";
    	header("Location: ./blogreg.php?error=$em&$data");
	    exit;
    }else if(empty($repass)){
    	$em = "Re entering the password is required";
    	header("Location: ./blogreg.php?error=$em&$data");
	    exit;
    }else {
      // hashing the repassword
      $repass = password_hash($repass, PASSWORD_DEFAULT);

      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO blog_managers(pass, username, repassword, pp) 
                 VALUES(?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$pass, $uname, $repass, $new_img_name]);

               header("Location: ./bloghome.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ./blogreg.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ./blogreg.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "INSERT INTO blog_managers(pass, username, repassword) 
       	        VALUES(?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$pass, $uname, $repass]);

       	header("Location: ./bloghome.php?success=Your account has been created successfully");
   	    exit;
      }
    }


}else {
	header("Location: ./blogreg.php?error=error");
	exit;
}