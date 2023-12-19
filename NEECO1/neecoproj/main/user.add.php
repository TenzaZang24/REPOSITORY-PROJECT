<?php
// session_start();
// $username   = $_SESSION['username'];
// $password  = $_SESSION['password'];
?>








<head>
	<title>User Add Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
<?php
include "../login.connect.php";

$fullname 	       = $_POST['fullname'];
$username 	       = $_POST['username'];
$email             = $_POST['email'];
$password		   = $_POST['password'];
$pass_con          = $_POST['password_confirm'];
$position	       = $_POST['position'];


$errors = array();
          
           require_once "../login.connect.php";
           $sql = "SELECT * FROM users WHERE username = '$username'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           
           if ($rowCount > 0) {
            array_push($errors);
	            echo '<script> alert("User name already registered!");
	            window.location="..//register/user.register.php";
	            </script>';
        }


        require_once "../login.connect.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        
        if ($rowCount > 0) {
         array_push($errors);
             echo '<script> alert("Email already registered!");
             window.location="..//register/user.register.php";
             </script>';
     }









if($password === $pass_con)
{
    $sql = mysqli_query($conn,
        "INSERT INTO users(fullname, username,email,password, position)
        VALUES ('$fullname','$username','email','$password','$position')");

    // TODO: Change below if statement from page to message box

        if($sql === true){
            
        }	else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
else
{
    echo "Passwords do not match, please try again";
    echo "<form action='user.register.php' method='POST'>";
    echo "<input type='submit' value='Back to Register'>";
    echo "</form>";
}
?>
<div class="bg-white border border-black p-4 rounded-4 bg-opacity-25 position-absolute top-50 start-50 translate-middle text-center shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1>User has been added successfully!</h1><br>
    <form action='../login.view.php' method='POST'>
    <input type='submit' value='Back to Login' class="butt">
    </form>
</div>


</body>