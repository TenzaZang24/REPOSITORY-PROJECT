<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
  header("Location:../login.view.php");
}
$userid = $_SESSION['userid'];


//is8l0mgcfdi1hgm3mh44bd66br
//is8l0mgcfdi1hgm3mh44bd66br

//$data = $_SESSION['data'];
// $password       = $_POST['password'];

// if($sql){
//   $num = mysqli_num_rows($sql);
//   if($num>0){
//       //$login_success  = 1;
//       session_start();
//       $_SESSION['userid']=$userid;
//       $_SESSION['password']=$password;
//       //$userid    = $_POST['userid'];
//       //$password  = $_POST['password'];
//   }
//   else{
//       $login_fail     = 1;
//       echo '<script>
//       alert("Incorrect Credentials, Please Try Again.");
//       window.location="../login.view.php";
//       </script>';
//   }
// }

// if(mysqli_num_rows($sql)>0){
//     $data = mysqli_fetch_array($sql);
//     $_SESSION['userid'] = $data['userid'];
//     $_SESSION['remarks'] = $data['remarks'];
//     $_SESSION['data'] = $data;
// } else {
//     echo '<script>
//     alert("Incorrect Credentials, Please Try Again.");
//     window.location="../";
//     </script>';
// }

//$firstname      = $_POST['firstname'];
//$lastname       = $_POST['lastname'];
// $login_success  = 0;
// $login_fail     = 0;

?>
<head>
    <title>Home</title>
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
          <li><a class="dropdown-item" href="../register/pole.register.php">Register New Pole Information</a></li>
          <li><a class="dropdown-item" href="../register/user.register.php">Create New Account</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="logout.main.php">LOGOUT</a></li>
        </ul>
        </li>
        
      <!-- <form action="#" method="POST" class="d-flex m-2" role="search">
        <input class="form-control me-2 bg-sage" type="search" placeholder="Search..." aria-label="Search">
        <button class="butt3" type="submit">Search</button>
      </form> -->

      </li>
      </ul>
      <form action="admin.searchpole.php" method="POST" class="d-flex m-2">
        <input type="text" placeholder="Search Pole Information..." name="search" class="form-control me-5 bg-sage">
      </form>
    </div>
  </div>
</nav>
    </div>
  </div>
</nav>



<
<h1>WELCOME, <?php echo $userid ?></h1>



<!----------Partylist Carousel---------->
<div class="container content-center w-100">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img src="../images/seven.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/neecover.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/neecorain.png" class="d-block w-100" alt="...">
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
</div>


<!----------Pole  Information Table---------->
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
    "SELECT * FROM sijadata");
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr class="">
    <td><?php echo $row['poleNum']?> </td>
          <td> <?php echo$row['fromBus']?> </td>
          <td> <?php echo$row['toBus']?> </td>
          <td> <?php echo$row['poleClass']?> </td>
          <td> <?php echo$row['poleType']?> </td>
          <td> <?php echo$row['lineType']?> </td>
          <td> <?php echo$row['consTypePri']?> </td>
          <td> <?php echo$row['consTypeSec']?> </td>
          <td> <?php echo$row['phasing']?> </td>
          <td> <?php echo$row['config']?> </td>
          <td> <?php echo$row['ground']?> </td>
          <td> <?php echo$row['condType']?> </td>
          <td> <?php echo$row['neuType']?> </td>
          <td> <?php echo$row['DTrate']?> </td>
          <td> <?php echo$row['DTphase']?> </td>
          <td> <?php echo$row['DTbrand']?> </td>
          <td> <?php echo$row['DTname']?> </td>
          <td> <?php echo$row['EquipInst']?> </td>
          <td> <?php echo$row['distFrom']?> </td>
          <td> <?php echo$row['kwhMeter']?> </td>
          <td> <?php echo$row['guy']?> </td>
          <td> <?php echo$row['date']?> </td>
          <td> <?php echo$row['coorLat']?> </td>
          <td> <?php echo$row['coorLong']?> </td>
          <td> <?php echo$row['remark']?> </td>
      <td>
      <a href = "poleinf.edit.php?id=<?php echo $row['poleNum']?>">
		  <input class="butt" type="submit" value="Edit Pole Information">
		  </a>
      <br>
      <a href = "pole.conf_delete.php?id=<?php echo $row['poleNum']?>">
		  <input class="del" type="submit" value="Delete Pole Information">
		  </a>
      </td>
    <?php } ?>
    </tr>
  </table>







</body>

  
</div>










         

  <!-- <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->





</div>
</body>


