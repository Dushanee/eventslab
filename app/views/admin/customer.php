<?php

session_start();

if (isset($_SESSION['email'])) {
    // echo $_SESSION['email'];
} else {
    echo '<br>You are not logged in';
}
?>

<?php

if (isset($data['error'])) {

    if (($data['error'] == 0)) {
?>
        <div class="alert-success">
            <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
            Customer Successfully Registered !
        </div>
        <script>
            var alertBox = document.querySelector('.alert');
            alertBox.classList.add('show');
            setTimeout(function() {
                alertBox.classList.add('hide');
            }, 5000); // 5000 milliseconds = 5 seconds
            function dismissAlert(button) {
                var alertBox = button.parentElement;
                alertBox.classList.add('hide');
                setTimeout(function() {
                    alertBox.remove();
                }, 500); // 500 milliseconds = 0.5 seconds
            }
        </script>
    <?php

    } else {
    ?>
        <div class="alert">
            <span class="closebtn" onclick="dismissAlert(this);">&times;</span>
            Email is Already Registered !
        </div>
        <script>
            var alertBox = document.querySelector('.alert');
            alertBox.classList.add('show');
            setTimeout(function() {
                alertBox.classList.add('hide');
            }, 5000); // 5000 milliseconds = 5 seconds
            function dismissAlert(button) {
                var alertBox = button.parentElement;
                alertBox.classList.add('hide');
                setTimeout(function() {
                    alertBox.remove();
                }, 500); // 500 milliseconds = 0.5 seconds
            }
        </script>
<?php
        // do something
    }
} else {
}

?>

<?php
$path = BASEURL;
$customers_per_page = 6;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $customers_per_page;
$total_customers = $data['drop'];
$total_pages = ceil($total_customers / $customers_per_page);
?>


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/admin_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/customers.css">
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
                <a href="<?php echo BASEURL ?>/adminFunction/admin"><span class="material-symbols-rounded">
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
                <a href="<?php echo BASEURL ?>/user/verify"><span class="material-symbols-rounded">
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
                <a href="<?php echo BASEURL ?>/adminFunction/customer"><span class="material-symbols-rounded">
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

        <!-- ------- end of side bar ----- -->
        <main>
            <h1>Customers</h1>
            <!-- <p>Total Customers: /p> -->
            <!-- <div class="date">
                <select name="" id="">
                    <option value="">Jhon</option>
                </select>
            </div> -->

            <div class="search-form-container">
                <form action="<?php echo BASEURL ?>/user/searchCustomer" method="GET">
                    <div class="search-input-container">
                        <input type="text" name="query" placeholder="Search for customer...">
                        <button type="submit">Search</button>
                    </div>

                </form>
            </div>

            <a href="<?php echo BASEURL ?>/pdf/generate" class="generate-report-btn">Generate PDF Report</a>


            <!-- -------orders table----- -->
            <div class="recent-orders">


                <?php

                echo " <table>";
                echo "<thead>";
                echo "<tr>";
                echo " <th>Id</th>";
                echo "  <th>Name</th>";
                echo "  <th>Email</th>";
                echo "  <th>Phone</th>";
                echo " <th></th>";
                echo " </tr>";
                echo "</thead>";
                echo " <tbody>";
                if (!isset($data['results'])) {
                    while ($row = $data['result']->fetch_assoc()) {



                        echo "<tr>";
                        echo "<td>" . $row["cust_id"] . "</td>";
                        echo "<td>" . $row["cust_fname"] . "</td>";



                        echo "<td>" . $row["cust_email"] . "</td>";
                        echo "<td>" . $row["phone_number"] . "</td>";

                        echo "<td class='warning'><a href='" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "'><input type='button' value='View' class='login-btn btn-primary btn button-view'></a></td>";

                        // echo "<td class='warning'><a href=" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "><input type='button' value='Edit' class=' success login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";
                        echo "<td class='warning'><a href='" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "'><input type='button' value='Remove' class='login-btn btn-primary btn button-delete'></a></td>";
                        echo " </tr>";

                        echo "    </tbody>";
                    }
                    echo "  </table>";

                    echo "</div>";
                    echo "<div class = 'pagination'>";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        $active = ($i == $current_page) ? "active" : "";
                        echo "<a class='$active' href='?page=$i'>$i</a>";
                    }
                
                } else {
                    while ($row = $data['results']->fetch_assoc()) {
                        $path = BASEURL;


                        echo "<tr>";
                        echo "<td>" . $row["cust_id"] . "</td>";
                        echo "<td>" . $row["cust_fname"] . "</td>";
                        echo "<td>" . $row["cust_email"] . "</td>";
                        echo "<td>" . $row["phone_number"] . "</td>";
                        echo "<td class='warning'><a href='" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "'><input type='button' value='View' class='login-btn btn-primary btn button-view'></a></td>";

                        // echo "<td class='warning'><a href=" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "><input type='button' value='Edit' class=' success login-btn btn-primary btn' style='padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;'></a></td>";
                        echo "<td class='warning'><a href='" . BASEURL . "/user/viewCustomer/" . $row["cust_id"] . "'><input type='button' value='Remove' class='login-btn btn-primary btn button-delete'></a></td>";
                        echo " </tr>";
                    }
                }
                echo "    </tbody>";
                echo "  </table>";
                ?>

            </div>

        </main>
        <!-- ------- end of main ----- -->

        <!-- =====right section=== -->
        <div class="right">



            <!-- =====end of top right=== -->


            <div class="card">
                <p>Total Customers: <?php echo $data['drop']; ?></p>
            </div>

            <div class="add-user">
                <h2>Add customer</h2>
                <div class="">
                    <div class="">

                        <form action="<?php echo BASEURL ?>/user/addCustomer" method="post" id="form">
                            <!-- <div class="col">
                                <label>Customer Id</label><br>
                                <input type="text" name="cust_id" placeholder="3"><br>
                            </div> -->
                            <div class="col">
                                <label>Email Address</label><br>
                                <input type="text" name="cust_email" placeholder="user@gmail.com" required><br>
                                <span class="error-message" id="email-error">Please Enter Valid Email Address</span>
                            </div>
                            <div class="col">
                                <label>Phone Number</label><br>

                                <input type="text" name="phone_number" placeholder="user" required><br>
                                <span class="error-message" id="contact-error">Contact number must be 10 digits long</span>

                            </div>



                            <div class="col">
                                <label>First Name</label><br>
                                <input type="text" name="cust_fname" placeholder="user"><br>

                            </div>

                            <div class="col">
                                <label>Second Name</label><br>
                                <input type="text" name="cust_lname" placeholder="user123"><br>
                            </div>

                            <div class="col">
                                <label>Temporary Password</label><br>
                                <input type="password" name="cust_password" placeholder="*******" required><br>
                                <span class="error-message" id="password-error"> Please choose a strong password</span>
                            </div>


                            <div class="col">
                                <button type="submit" class="login-btn btn-primary btn">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>
                <!-- =====end of recent updates === -->


            </div>

        </div>

</body>

<!--Add user form Validation-->
<script>
    const form = document.getElementById('form');
    const emailAddressInput = document.querySelector('input[name="cust_email"]');
    const contactNoInput = document.querySelector('input[name="phone_number"]');
    const passwordInput = document.querySelector('input[name="cust_password"]');
    const errorMessages = document.querySelectorAll('.error-message');


    emailAddressInput.addEventListener('input', validateEmailAddress);
    contactNoInput.addEventListener('input', validateContactNo);
    passwordInput.addEventListener('input', validatePassword);









    function validateEmailAddress() {


        if (emailAddressInput.value.trim() === '' || !validateEmail(emailAddressInput.value.trim())) {
            emailAddressInput.classList.add('error');
            errorMessages[0].style.display = 'block';
        } else {
            emailAddressInput.classList.remove('error');
            errorMessages[0].style.display = 'none';
        }

    }

    function validateContactNo() {
        if (contactNoInput.value.trim() === '' || contactNoInput.value.trim().length !== 10) {
            contactNoInput.classList.add('error');
            errorMessages[1].style.display = 'block';
        } else {
            contactNoInput.classList.remove('error');
            errorMessages[1].style.display = 'none';
        }
    }






    function validatePassword() {
        console.log('validatePassword called');
        console.log('passwordInput.value', passwordInput.value.trim());
        console.log('validatePasswordRegex', validatePasswordRegex(passwordInput.value.trim()));
        if (passwordInput.value.trim() === '' || !validatePasswordRegex(passwordInput.value.trim())) {
            passwordInput.classList.add('error');
            errorMessages[2].style.display = 'block';
        } else {
            passwordInput.classList.remove('error');
            errorMessages[2].style.display = 'none';
        }
    }





    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validatePasswordRegex(password) {
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;
        return passwordRegex.test(password);
    }




    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (contactNoInput.classList.contains('error') || emailAddressInput.classList.contains('error') || passwordInput.classList.contains('error')) {
            // If any of the inputs has the error class, the form will not be submitted
            return;
        }
        // If all inputs pass validation, display a confirmation message
        const shouldSubmit = confirm("Are you sure you want to add the Customer?");
        if (shouldSubmit) {
            form.submit();
        }
    });
</script>

</html>