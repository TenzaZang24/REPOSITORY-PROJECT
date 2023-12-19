<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
  header("Location:../login.admin.php");
}
$userid    = $_SESSION['userid'];
$password  = $_SESSION['password'];


//$firstname      = $_POST['firstname'];
//$lastname       = $_POST['lastname'];
// $login_success  = 0;
// $login_fail     = 0;

// $sql = mysqli_query($conn,"SELECT * FROM users WHERE userid = '$userid' and password = '$password' and admin = 2");

// if($sql){
//     $num = mysqli_num_rows($sql);
//     if($num>0){
//         //$login_success  = 1;
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
    <img src="../images/neeco1.png" alt="NEECO1 LOGO" width="5%" height="5%" class="">
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
            <li><a class="dropdown-item" href="#">View Users</a></li>
            <li><a class="dropdown-item" href="../main/main.view.php">View Pole Information</a></li>
            <li><a class="dropdown-item" href="#">View Results</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.main.php">LOGOUT</a></li>
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
      </form>
    </div>
  </div>
</nav>



<h1>WELCOME, ADMIN <?php echo $userid ?></h1>


<!----------Carousel---------->
<!-- <div class="container content-center w-50">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img src="../images/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div> -->


<!----------Users Table---------->
  <table class="styled-table">
    <tr class="active-row">
      <th class="">Full Name</th>
      <th class="">User Name</th>
      <th class="">Email</th>
      <th class="">Password</th>
      <th class="">Position</th>
     
    </tr>
    <?php
    $result = mysqli_query($conn, 
    "SELECT * FROM users");
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr class="">
      <td> <?php echo $row['fullname']?> </td>
      <td> <?php echo $row['username']?> </td>
      <td> <?php echo $row['email']?> </td>
      <td> <?php echo $row['password']?> </td>
      <td> <?php echo $row['position']?> </td>
      <td>
      <a href = "user.edit.php?id=<?php echo $row['userid']?>">
		  <input class="butt" type="submit" value="Edit User">
		  </a>
      <br>
      <a href = "user.conf_delete.php?id=<?php echo $row['userid']?>">
		  <input class="del" type="submit" value="Delete User">
		  </a>
      </td>
    <?php } ?>
    </tr>
  </table>
</div>
</body>