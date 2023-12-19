<?php
include "login.connect.php";
session_start();

$username    = $_POST['username'];
$password  = $_POST['password'];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  


$sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' and password = '$password'");
$get_row = mysqli_fetch_array($sql);

if($get_row['position']=='user')
{
  //echo $get_row['userid'] . $get_row['firstname'] . "<br>"; // Testing if $get_row works
  $_SESSION['userid'] = $get_row['username'];
  //echo $_SESSION['userid'] . $get_row['firstname'] . "<br>"; // Testing if $_SESSION['userid'] works
  $_SESSION['password'] = $get_row['password'];
  //echo $_SESSION['password'] . "<br>"; // Testing if $_SESSION['password'] works
  //$_SESSION['data'] = $get_row;
  header("Location:main/main.view.php");
} 






elseif(($get_row['position']=='admin'))
{
  //echo $get_row['userid'] . $get_row['firstname'] . "<br>"; // Testing if $get_row works
  $_SESSION['userid'] = $get_row['username'];
  //echo $_SESSION['userid'] . $get_row['firstname'] . "<br>"; // Testing if $_SESSION['userid'] works
  $_SESSION['password'] = $get_row['password'];
  //echo $_SESSION['password'] . "<br>"; // Testing if $_SESSION['password'] works
  //$_SESSION['data'] = $get_row;
  header("Location:main/admin.view.php");
} 








else
{
  echo '<script>
  alert("Incorrect Credentials, Please Try Again.");
  window.location="login.view.php";
  </script>';
}
}

// if(isset($_SESSION['userid']))
// {
//   
//   exit();
// }

?>
<head>
    <title>Redirecting</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
  <br>
  <p>Redirecting...</p>
</body>