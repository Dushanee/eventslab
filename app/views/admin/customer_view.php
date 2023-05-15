<link rel="stylesheet" type="text/css " href="<?php echo BASEURL ?>/public/css/customer_view.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>


<div class="container">
<aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo BASEURL ?>/images/logo1.png" alt="logo">
                    <h2>Events
                        <span class="logo-colour">Lab</span>
                    </h2>
                </div>
                <div class="close" id="close-btn"><span class="material-symbols-rounded">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="<?php echo BASEURL ?>/adminFunction/admin" ><span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/customer" class="active"><span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Customers</h3>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/service"><span class="material-symbols-rounded">
                        storefront
                    </span>
                    <h3>Service Providers</h3>
                </a>
                </a>
                <a href="<?php echo BASEURL ?>/adminFunction/orders"><span class="material-symbols-rounded">
                        order_approve
                    </span>
                    <h3>Orders</h3>
                </a>
                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Verify Users</h3>
                    <span class="message-count">31</span>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">31</span>
                </a>


                <a href="<?php echo BASEURL ?>/adminFunction/packages"><span class="material-symbols-rounded">
                        inventory_2
                    </span>
                    <h3>Packages</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        payments
                    </span>
                    <h3>Payments</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        summarize
                    </span>
                    <h3>Reports</h3>
                </a>

                <a href=""><span class="material-symbols-rounded">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>


                <a href="<?php echo BASEURL ?>/welcome/signout"><span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
        </aside>


      

  <div class="left-container">

<main>


<div class="recent-order">
<div class="view-form-col-50 ">
<div class="view-form">
 <?php

 if (isset($data['customerOrder'])){

    
    $path = BASEURL;
    echo"<table>";
    echo" <thead>";
    echo" <tr>";
    echo" <th>Order Id</th>";
    echo" <th>Date</th>";
    echo" <th>Customer Id</th>";
    echo" <th>Customer Name </th>";
                          
    echo" </thead>";
    echo" <tbody>";
    while ($row = $data['customerOrder']->fetch_assoc()) {
      
                        echo "<tr>";
                        echo "<td>" . $row["order_id"] . "</td>";
                        echo "<td>" . $row["order_date"] . "</td>";
                        echo "<td>" . $row["cust_id"] . "</td>";
                        echo "<td>" . $row["cust_fname"] . "</td>";
                          
                         
                        echo "<td>Paid</td>";
                        echo "<td class='warning'><a href=" . BASEURL . "/order/viewOrder/". $row["order_id"] . "><input type='button' value='View' class='button-view'></a></td>";

                    echo "</tr>";
                        
                        echo" </tbody>";

    }
                        echo"</table>";
                        echo"</div>";  
                        echo"</div>"; 
                   
                          


}else{
                        ?>








 


            <h1>Customer Details</h1>
            <div class="view-form-col-50 ">
            <div class="view-form">
     <form  action="<?php echo BASEURL ?>/user/editCustomer" method="post">

           

<?php
  while ($row = $data['result']->fetch_assoc()) {
    $custId = $row['cust_id'];
    $custFname = $row['cust_fname'];
    $custLname = $row['cust_lname'];
    $custEmail = $row['cust_email'];
    $phoneNumber = $row['phone_number'];
    $custAddress = $row['cust_address'];
    $custPassword = $row['cust_password'];


    echo"<label >Customer Id</label>";
    echo"<input type='text'  name='cust_id' value='$row[cust_id]' readonly>";

    echo"<label >First Name</label>";
    echo"<input type='text'  name='cust_fname' value='$row[cust_fname]'>";

    echo"<label >Last Name</label>";
    echo"<input type='text'  name='cust_lname' value='$row[cust_lname]'>";

    echo"<label >Email</label>";
    echo"<input type='text'  name='cust_email' value='$row[cust_email]'>";
   

    echo"<label >Contact No</label>";
    echo"<input type='text'  name='phone_number' value='$row[phone_number]'>";

    echo"<label >Address</label>";
    echo"<input type='text'  name='cust_address' value='$row[cust_address]'>";

    echo"<label >Password</label>";
    echo"<input type='text'  name='cust_password' value='$row[cust_address]'>";
    // echo"<label >Birthday</label>";
    // echo"<input type='date'  name='birthday' value=' $row[birthday] '>";


    
  };
  echo "<div  class='button-row'>";
  echo "<a href='" . BASEURL . "/user/updateCustomer/" . $custId . "' class='button-delete-link' onclick=\"return confirm('Are you sure you want to update this user')\"><button class='button-update'>Update</button></a>";
?>
</form>
<form  action="<?php echo BASEURL ?>/user/deleteCustomer" method="post">

<?php
echo"<input type='hidden' name='cust_id' value='$custId'>";
  echo "<button class='button-delete' onclick=\"return confirm('Are you sure you want to delete this user' )\" type='submit'>Delete</button></a>";



  echo "<a href='" . BASEURL . "/user/customerOrder/" . $custId . "' class='button-update'>View Orders</a>";

  echo "</div>";



  echo"</div>";
  echo"</main>";

}





?>

         
</div>        






        <div class="right-container">
 
       
        <div class="view-form-col-50 ">
        <div class="view-form">
        <?php
  while ($row = $data['result']->fetch_assoc()) {
    $custId = $row['cust_id'];
    $custFname = $row['cust_fname'];
    $custLname = $row['cust_lname'];
    $custEmail = $row['cust_email'];
    $phoneNumber = $row['phone_number'];
    $custAddress = $row['cust_address'];
    $custPassword = $row['cust_password'];
  }?>


        <form  action="<?php echo BASEURL ?>/user/customMail" method="post">
        <h1>Send Email</h1>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Sent to :</label>
                </div>
                <div class="col-75"><?php
                echo "<input type='text' name='cust_email' value='$custEmail'>";
                echo "<input type='hidden' name='id' value='$custId'>";
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">subject</label>
                </div>
                <div class="col-75">
                    <input type="text" id="subject" name="subject" placeholder="Email Subject">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Body</label>
                </div>
                <div class="col-75">
                    <textarea id="lname" name="body" placeholder="email body goes here" rows="10"></textarea>
                </div>
            </div>

         

            <br>
            <div class="row">
            <button class="button-update" type="submit" value="Send Mail" onclick="return confirm('Are you sure you want to send the email')">Send Mail</button>

            </div>
        </form>
    </div>     </div> </div> 

</body>

</html>