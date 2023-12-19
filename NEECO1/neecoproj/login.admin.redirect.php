<?php
include "login.connect.php";
session_start();
$userid    = $_POST['username'];
$password  = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' and password = '$password' and admin =1");
$get_row = mysqli_fetch_array($sql);

if(is_array($get_row))
{
  $_SESSION['username'] = $get_row['username'];;
  $_SESSION['password'] = $get_row['password'];
  //$_SESSION['data'] = $get_row;
  header("Location:main/admin.view.php");
} else
{
  echo '<script>
  alert("Incorrect Credentials, Please Try Again.");
  window.location="login.view.php";
  </script>';
}
// if(isset($_SESSION['userid']))
// {
//   header("Location:main/admin.view.php");
// }
?>
<head>
    <title>Redirecting</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
  <p>Redirecting...</p>
</body>