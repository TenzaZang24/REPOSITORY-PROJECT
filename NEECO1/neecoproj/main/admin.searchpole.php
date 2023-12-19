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
      <form action="admin.searchpole.php" method="POST" class="d-flex m-2">
        <input type="text" placeholder="Search Pole Information..." name="search" class="form-control me-2 bg-sage">
        <!-- <input type="submit" value="Search" name="search" class="butt3"> -->
      </form>
    </div>
  </div>
</nav>

<?php
$name_get = mysqli_query($conn,"SELECT fullname FROM users WHERE userid = '$userid'");
while($name_row = mysqli_fetch_assoc($name_get)){
?>

<h1>WELCOME, ADMIN <?php echo strtoupper($name_row['username']) ?></h1>

<?php } ?>


  </table>
  <!----------Pole Information Table---------->
  <table class="styled-table">
    <tr class="active-row">
      <th class="">Pole Number</th>
      <th class="">fromBus</th>
      <th class="">toBus</th>
      <th class="">Pole Class</th>
      <th class="">Pole Type</th>
      <th class="">Line Type</th>
      <th class="">consTypePri</th>
      <th class="">consTypeSec </th>
      <th class="">phasing</th>
      <th class="">config</th>
      <th class="">ground</th>
      <th class="">condType</th>
      <th class="">neuType</th>
      <th class="">DTrate</th>
      <th class="">DTphase</th>
      <th class="">DTbrand</th>
      <th class="">DTname</th>
      <th class="">EquipInst</th>
      <th class="">distFrom</th>
      <th class="">kwhMeter</th>
      <th class="">	guy</th>
      <th class="">	date</th>
      <th class="">coorLat</th>
      <th class="">coorLong</th>
      <th class="">remark</th>
      

    </tr>
    <?php
    
    $result = mysqli_query($conn, 
    "SELECT * FROM sijadata
    WHERE poleNum	 LIKE '%$search%'
    OR fromBus LIKE '%$search%'
    OR toBus LIKE '%$search%'
    OR poleClass LIKE '%$search%'
    OR poleType LIKE '%$search%'
    OR lineType LIKE '%$search%'
    OR consTypePri LIKE '%$search%'
    OR consTypeSec LIKE '%$search%'
    OR phasing LIKE '%$search%'
    OR config LIKE '%$search%'
    OR ground LIKE '%$search%'
    OR condType LIKE '%$search%'
    OR neuType LIKE '%$search%'
    oR DTrate LIKE '%$search%'
    OR DTphase LIKE '%$search%'
    OR DTbrand LIKE '%$search%'
    OR DTname LIKE '%$search%'
    oR EquipInst LIKE '%$search%'
    OR distFrom LIKE '%$search%'
    OR kwhMeter LIKE '%$search%'
    OR guy LIKE '%$search%'
    oR date LIKE '%$search%'
    OR coorLat LIKE '%$search%'
    OR coorLong LIKE '%$search%'
    OR remark LIKE '%$search%'


    
    

  ");

    $count2 = mysqli_num_rows($result);
    if($count2 > 0)
    {
      while($row_sijadata = mysqli_fetch_assoc($result)){
        ?>
        <tr class="">
          <td> <?php echo $row_sijadata['poleNum']?> </td>
          <td> <?php echo $row_sijadata['fromBus']?> </td>
          <td> <?php echo $row_sijadata['toBus']?> </td>
          <td> <?php echo $row_sijadata['poleClass']?> </td>
          <td> <?php echo $row_sijadata['poleType']?> </td>
          <td> <?php echo $row_sijadata['lineType']?> </td>
          <td> <?php echo $row_sijadata['consTypePri']?> </td>
          <td> <?php echo $row_sijadata['consTypeSec']?> </td>
          <td> <?php echo $row_sijadata['phasing']?> </td>
          <td> <?php echo $row_sijadata['config']?> </td>
          <td> <?php echo $row_sijadata['ground']?> </td>
          <td> <?php echo $row_sijadata['condType']?> </td>
          <td> <?php echo $row_sijadata['neuType']?> </td>
          <td> <?php echo $row_sijadata['DTrate']?> </td>
          <td> <?php echo $row_sijadata['DTphase']?> </td>
          <td> <?php echo $row_sijadata['DTbrand']?> </td>
          <td> <?php echo $row_sijadata['DTname']?> </td>
          <td> <?php echo $row_sijadata['EquipInst']?> </td>
          <td> <?php echo $row_sijadata['distFrom']?> </td>
          <td> <?php echo $row_sijadata['kwhMeter']?> </td>
          <td> <?php echo $row_sijadata['guy']?> </td>
          <td> <?php echo $row_sijadata['date']?> </td>
          <td> <?php echo $row_sijadata['coorLat']?> </td>
          <td> <?php echo $row_sijadata['coorLong']?> </td>
          <td> <?php echo $row_sijadata['remark']?> </td>
         <td>
      <a href = "poleinf.edit.php?id=<?php echo $row_sijadata['poleNum']?>">
		  <input class="butt" type="submit" value="Edit Pole Information">
		  </a>
      <br>
      <a href = "pole.conf_delete.php?id=<?php echo $row_sijadata['poleNum']?>">
		  <input class="del" type="submit" value="Delete Pole Information">
		  </a>
      </td>
          
          
        <?php } ?>
        </tr>
        <?php
    }else{
      ?>
      <div class="bg-danger">
      <h3><strong>Pole Information Not Found!</strong></h3>
      </div>
      <?php
    }
  ?> 
  </table>
</div>

<!----------------TEST ZONE--------------------->



</body>
