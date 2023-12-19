<?php
include "../login.connect.php";
session_start();


if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }

$userid =$_SESSION['userid'];


$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT * FROM sijadata  WHERE poleNum = '$id'");
while ($row = mysqli_fetch_array($select))
{
   
    $poleNum= $row['poleNum'];
    $fromBus	         = $row['fromBus'];
    $toBus          = $row['toBus'];
    $poleClass          = $row['poleClass'];
    $poleType         = $row['poleType'];
    $lineType         = $row['lineType'];


    $consTypePri            =$row['consTypePri'];
    $consTypeSec         = $row['consTypeSec'];
    $phasing          = $row['phasing'];
    $config          = $row['config'];
    $ground         = $row['ground'];



    $condType            =$row['condType'];
    $neuType         = $row['neuType'];
    $DTrate          = $row['DTrate'];
    $DTphase          = $row['DTphase'];
    $DTbrand         = $row['DTbrand'];


    $DTname            =$row['DTname'];
    $EquipInst         = $row['EquipInst'];
    $distFrom          = $row['distFrom'];
    $kwhMeter          = $row['kwhMeter'];
    $guy                = $row['guy'];


    $date            =$row['date'];
    $coorLat         = $row['coorLat'];
    $coorLong          = $row['coorLong'];
    $remark          = $row['remark'];
    

   


   
}
?>
<head>
    <title>Testing With GUI Edit Pole Information Page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi8">
    <div class="bg-white border border-black p-4 rounded-4 bg-opacity-25 position-absolute top-50 start-50 translate-middle text-center shadow p-3 mb-5 bg-body-tertiary rounded">
        <h3>Testing With GUI Edit Pole Information Page:</h3>
    <form action="..//main/poleinf.update.php" method="POST">
        <div class="form-group">
        <div class="row">



            <div class="col-md-4">
            <input type="text"  class="mb-2 form-control"  required name="poleNum" value="<?php echo $poleNum?>" >
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="fromBus" value="<?php echo $fromBus?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="toBus" value="<?php echo $toBus?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <input type="text" class="mb-2 form-control" required name="poleClass" value="<?php echo $poleClass?>">
            </div>
            <div class="col-md-6">
            <input type="text" class="mb-2 form-control" required name="poleType" value="<?php echo $poleType?>">
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="lineType" value="<?php echo $lineType?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="consTypePri" value="<?php echo $consTypePri?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="consTypeSec" value="<?php echo $consTypeSec?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="phasing" value="<?php echo $phasing?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="config" value="<?php echo $config?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="ground" value="<?php echo $ground?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="condType" value="<?php echo $condType?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="neuType" value="<?php echo $neuType?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="DTrate" value="<?php echo $DTrate?>">
            </div>



            <div class="row">
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="DTphase" value="<?php echo $DTphase?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="DTbrand" value="<?php echo $DTbrand?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="DTname" value="<?php echo $DTname?>">
            </div>
        </div>
        


 <div class="row">

 <tr>
                    <td><input type="hidden" name="poleNum" value="<?php echo $id?>"></td>
                </tr>

            <div class="col-md-6">
            <input type="text" class="mb-2 form-control" required name="EquipInst" value="<?php echo $EquipInst?>">
            </div>
            <div class="col-md-6">
            <input type="text" class="mb-2 form-control" required name="distFrom" value="<?php echo $distFrom?>">
            </div>


  <div class="row">
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="kwhMeter" value="<?php echo $kwhMeter?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="guy" value="<?php echo $guy?>">
            </div>
            <div class="col-md-4">
            <input type="date" class="mb-2 form-control" required name="date" value="<?php echo $date?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="coorLat" value="<?php echo $coorLat?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="coorLong" value="<?php echo $coorLong?>">
            </div>
            <div class="col-md-4">
            <input type="text" class="mb-2 form-control" required name="remark" value="<?php echo $remark?>">
            </div>
            <tr>
                    <td><input type="hidden" name="poleNum" value="<?php echo $id?>"></td>
                </tr>
        </div>
        <div>
        <input type="submit" value="Edit Pole " class="butt"><br></br>
        </div>
        </form>

    <form action="main.view.php" method="POST">
        
        <input type="submit" value="Back to Admin" class="butt2">

    </form>
    </div>

   
</body>