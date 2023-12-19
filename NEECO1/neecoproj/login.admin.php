<?php
include "login.connect.php";

?>
<head>
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="pe-5 pt-5">
        <div class="pe-5 pt-5">
            <div class="position-relative pt-5 pe-5 text-center">
            <div class="col-md-12 bg-white border border-black p-4 rounded-4 bg-opacity-25 shadow p-5 mb-5 bg-body-tertiary rounded">
                <img src="images/wup.png" alt="WUP Logo" width="40%" height="14%" class="mb-2">
                <form action="login.admin.redirect.php" method="POST">
                    <input type="text" placeholder="User ID" name="userid" required class="mb-2 form-control">
                    <!-- <input type="text" placeholder="First Name" name="firstname" required class="mb-2 form-control">
                    <input type="text" placeholder="Last Name" name="lastname" required class="mb-2 form-control"> -->
                    <input type="password" placeholder="Password" name="password" required class="mb-2 form-control">
                    <input type="submit" value="Admin Login" class="butt">
                </form>
                <form action="login.view.php" method="POST">
                    <input type="submit" value="Back to User Login" class="butt">
                </form>
            </div>
            </div>
        </div>
    </div>
</body>