<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }

$userid  = $_SESSION['userid'];
$password  = $_SESSION['password'];


$userid = $_POST['userid'];
$fullname          = $_POST['fullname'];    
$username            = $_POST['username'];
$email               =$_POST['email'];
$password           = $_POST['password'];
$position        = $_POST['position'];


$update = mysqli_query($conn, "UPDATE users 
SET fullname = '$fullname',
username = '$username',
email = '$email', 
password = '$password', 
position = '$position'"
. "WHERE userid = '$userid'");

if($update === true)
{
?>
<head>
    <title>User Update Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>User Information Updated!</h3>
            <form action='admin.view.php' method='POST'>
                <input type='submit' class='butt' value='Back to Admin'>
            </form>
        </div>
    </div>
<?php
}
else
{
    echo 'An error occured';
}
?> 
</body>