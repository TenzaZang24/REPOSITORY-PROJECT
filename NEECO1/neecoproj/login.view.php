<?php
include "login.connect.php";

?>
<head>



    
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="pe-5 pt-5">
        <div class="pe-5 pt-5">
            <div class="position-relative pt-4 pe-5 text-center">
                <div class="col-md-12 bg-white border border-black p-4 rounded-4 bg-opacity-25 shadow p-5 mb-5 bg-body-tertiary rounded">
                    <img src="Images/neeco1.png" alt="NEECO1 Logo" width="40%" height="14%" class="mb-2">
                    <form action="login.redirect.php" method="POST">
                        <input type="text" placeholder="Username" name="username" required class="mb-2 form-control">

                        <!-- <input type="text" placeholder="First Name" name="firstname" required class="mb-2 form-control">
                        <input type="text" placeholder="Last Name" name="lastname" required class="mb-2 form-control"> -->

                        <input type="password" placeholder="Password" name="password" required class="mb-2 form-control"><br>
                        <input type="submit" value="Login" name="Login" class="butt">
                    </form>
                    <p>Create New Account?</p>
                    <form action="register/user.register.php" method="POST">
                        <input type="submit" value="Create" class="butt">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    </body>
