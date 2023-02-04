<!-- username and password fields validation -->
<script>
    function validateForm() {
        let x = document.forms["myForm"]["username"].value;
        let y = document.forms["myForm"]["password"].value;
        if (x == "") {
            alert("Username must be filled out");
            return false;
        }
        if (y == "") {
            alert("Password must be filled out");
            return false;
        }
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">

<body>


    <div class="container">
      
            <div class="title"><span>Admin Sign Up</span></div>
            <br>
            <form action="<?php echo BASEURL ?>/user/addCustomer" method="post">
                    <div class="col">
                    <input type="text" name="username" placeholder=" Enter Name">
                </div>

                <br>
                <div class="col">
                    <input type="text" name="username" placeholder="Enter email">
                </div>
                <br>
                <div class="col">
                    <input type="text" name="username" placeholder=" Create Username">
                </div>

                <br>
                <div class="col">
                    <input type="password" name="password" placeholder=" Create Password">
                </div>

                <br>

                <div class="buttonSec">
                    <button type="submit" value="login">Add</button>
                </div>

            </form>
    
    </div>

</body>


</html>