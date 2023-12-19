<?php
include "../login.connect.php";

// session_start();
// $userid    = $_SESSION['userid'];
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
        <h3>Register Post Line Information:</h3>
    <form action="..//main/pole.add.php" method="POST">
        <div class="form-group">
        <div class="row">
            <div class="col-md-4">
            <input type="text" name="poleNum" placeholder="PoleNum
            " required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="fromBus" placeholder="fromBus" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="toBus" placeholder="toBus" required class="mb-2 form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <input type="text" name="poleClass" placeholder="poleClass" required class="mb-2 form-control">
            </div>
            <div class="col-md-6">
            <input type="text" name="poleType" placeholder="poleType" required class="mb-2 form-control">
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-4">
            <input type="text" name="lineType" placeholder="lineType" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="consTypePri" placeholder="consTypePri" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="consTypeSec" placeholder="consTypeSec" required class="mb-2 form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <input type="text" name="phasing" placeholder="phasing" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="config" placeholder="config" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="ground" placeholder="ground" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="condType" placeholder="condType" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="neuType" placeholder="neuType" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="DTrate" placeholder="DTrate" required class="mb-2 form-control">
            </div>



            <div class="row">
            <div class="col-md-4">
            <input type="text" name="DTphase" placeholder="DTphase" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="DTbrand" placeholder="DTbrand" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="DTname" placeholder="DTname" required class="mb-2 form-control">
            </div>
        </div>
        


 <div class="row">
            <div class="col-md-6">
            <input type="text" name="EquipInst" placeholder="EquipInst" required class="mb-2 form-control">
            </div>
            <div class="col-md-6">
            <input type="text" name="distFrom" placeholder="distFrom" required class="mb-2 form-control">
            </div>


  <div class="row">
            <div class="col-md-4">
            <input type="text" name="kwhMeter" placeholder="kwhMeter" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="guy" placeholder="guy" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="date" name="date" placeholder="date" required class="mb-2 form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <input type="text" name="coorLat" placeholder="coorLat" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="coorLong" placeholder="coorLong" required class="mb-2 form-control">
            </div>
            <div class="col-md-4">
            <input type="text" name="remark" placeholder="remark" required class="mb-2 form-control">
            </div>
        </div>
        <div>
        <input type="submit" value="Register Pole" class="butt"><br></br>
        </div>
        </form>

    <form action="../login.view.php" method="POST">
        
        <input type="submit" value="Already Registered?" class="butt">

    </form>
    </div>

   
</body>