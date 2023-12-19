<?php
include "../login.connect.php";

// session_start();
// $username    = $_SESSION['username'];
// $password  = $_SESSION['password'];


?>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="bg-white border border-black p-4 rounded-4 bg-opacity-25 position-absolute top-50 start-50 translate-middle text-center shadow p-3 mb-5 bg-body-tertiary rounded">
        <h3>Register User Details Here:</h3>
    <form action="..//main/user.add.php" method="POST">
        <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <input type="text" name="fullname" placeholder="Full Name" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="username" placeholder="User Name" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="email" placeholder="Email" required class="mb-2 form-control">
            </div>


        </div>


        <div class="row">
            <div class="col-md-6">
            <input type="password" name="password" placeholder="Password" required class="mb-2 form-control" id="pw1">
            </div>
            <div class="col-md-6">
            <input type="password" name="password_confirm" placeholder="Confirm Password" required class="mb-2 form-control" id="pw2" onkeyup="validate_password()">
            </div>


        </div>
        <span id="wrong_pass_alert"></span>
        <div class="row">
           
        </div>
        <div class ="col-md-12">
        <select name="position" id="position" required class="mb-2 form-control">
    
           <option value="">Position</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

    </div>
    <div>
    
    </div>


        <input type="submit" value="Register User" class="butt" id="create" onclick="wrong_pass_alert()"><br>
        </div>
    </form>

    <form action="../login.view.php" method="POST">
        <input type="submit" value="Already Registered?" class="butt">
    </form>
    </div>
    <script>
 function validate_password() {
    var pw1 = document.getElementById('pw1').value;
    var pw2 = document.getElementById('pw2').value;
    if (pw1 != pw2 || pw1 == "" || pw2 == "") {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = '☒ Password does not match';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
    }
    /* ¯\_(ツ)_/¯
    function wrong_pass_alert() {
    if (document.getElementById('pw1').value != "" && document.getElementById('pw2').value != "") {
        alert("Your response is submitted");
    }
    }*/
</script>
</body>