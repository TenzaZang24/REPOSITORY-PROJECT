<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
  header("Location:../login.view.php");
}
$userid   = $_SESSION['userid'];
$password  = $_SESSION['password'];

$search  = $_POST['search'];
// $userid    = $_POST['userid'];
// $password  = $_POST['password'];

//$firstname      = $_POST['firstname'];
//$lastname       = $_POST['lastname'];
// $login_success  = 0;
// $login_fail     = 0;

// $sql = mysqli_query($conn,"SELECT * FROM users WHERE userid = '$userid' and password = '$password' and admin = 2");

// if($sql){
//     $num = mysqli_num_rows($sql);
//     if($num>0){
//         //$login_success  = 1;
//         session_start();
//         $_SESSION['userid']=$userid;
//         //$_SESSION['firstname']=$firstname;
//         //$_SESSION['lastname']=$lastname;
//         $_SESSION['password']=$password;
//     }
//     else{
//         //$login_fail     = 1;
//         echo '<script>
//         alert("Incorrect Credentials, Please Try Again.");
//         window.location="../login.admin.php";
//         </script>';
//     }
// }
?>
<head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
<!----------NAVIGATION BAR---------->
<nav class="navbar navbar-expand-lg sticky-top sage-to-olive">
  <div class="container-fluid">
    <img src="../images/neeco1.png" alt="NEEC01 LOGO" width="5%" height="5%" class="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle butt3 m-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.view.php">View Users</a></li>
            <li><a class="dropdown-item" href="../main/main.view.php">View Pole Information</a></li>
            <li><a class="dropdown-item" href="#">View Results</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../login.view.php">LOGOUT</a></li>
            </ul>
        <li>
        <a class="nav-link dropdown-toggle butt3 m-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Add
        </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../register/pole.register.php">Register Pole Information</a></li>
            <li><a class="dropdown-item" href="../register/user.register.php">Create New Account</a></li>
            </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link butt3 m-2" aria-current="page" href="#">Vote Now</a>
        </li> -->
        </li>
      </ul>
      <form action="admin.search.php" method="POST" class="d-flex m-2">
        <input type="text" placeholder="Search User Information..." name="search" class="form-control me-2 bg-sage">
        <!-- <input type="submit" value="Search" name="search" class="butt3"> -->
      </form>
    </div>
  </div>
</nav>

<?php
$name_get = mysqli_query($conn,"SELECT fullname FROM users WHERE username = '$username'");
while($name_row = mysqli_fetch_assoc($name_get)){
?>

<h1>WELCOME, ADMIN <?php echo strtoupper($name_row['fullname']) ?></h1>

<?php } ?>


  </table>
  <!----------Users Table---------->
  <table class="table table-striped">
    <tr>
      <th class="">Full Name</th>
      <th class="">User Name</th>
      <th class="">Email</th>
      <th class="">Password</th>
      <th class="">Position</th>
    </tr>
    <?php
    
    $result = mysqli_query($conn, 
    "SELECT * FROM users 
    WHERE username LIKE '%$search%'
    OR fullname LIKE '%$search%'
    OR username LIKE '%$search%'
    OR email LIKE '%$search%'
    OR position LIKE '%$search%'

  ");

    $count2 = mysqli_num_rows($result);
    if($count2 > 0)
    {
      while($row_users = mysqli_fetch_assoc($result)){
        ?>
        <tr class="">
          <td> <?php echo $row_users['fullname']?> </td>
          <td> <?php echo $row_users['username']?> </td>
          <td> <?php echo $row_users['email']?> </td>
          <td> <?php echo $row_users['password']?> </td>
          <td> <?php echo $row_users['position']?> </td>
          <td>
      <a href = "user.edit.php?id=<?php echo $row_users['userid']?>">
		  <input class="butt" type="submit" value="Edit User">
		  </a>
      <br>
      <a href = "user.conf_delete.php?id=<?php echo $row_users['userid']?>">
		  <input class="del" type="submit" value="Delete User">
		  </a>
      </td>
          
          
        <?php } ?>
        </tr>
        <?php
    }else{
      ?>
      <div class="bg-danger">
      <h3><strong>User Information Not Found!</strong></h3>
      </div>
      <?php
    }
  ?> 
  </table>
</div>

<!----------------TEST ZONE--------------------->



</body>
