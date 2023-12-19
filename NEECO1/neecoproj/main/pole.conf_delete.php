<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }


$password  = $_SESSION['password'];

$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT * FROM sijadata  WHERE poleNum = '$id'");
while ($row = mysqli_fetch_array($select))
{
   
    $poleNum=            $row['poleNum'];
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
    <title>Post Line Delete Confirmation</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Are you sure you want to delete this pole information?</h3>
            <strong>poleNum	: <?php echo $poleNum	 ?></strong><br>
            <strong>fromBus: <?php echo $fromBus ?></strong><br>
            <strong>toBus: <?php echo $poleClass ?></strong><br>
            <strong>poleClass: <?php echo $poleClass ?></strong><br>
            <strong>poleType: <?php echo $poleType ?></strong><br>
            <strong>lineType: <?php echo $lineType ?></strong><br>
            <strong>consTypePri: <?php echo $consTypePri ?></strong><br>
            <strong>consTypeSec: <?php echo $consTypeSec ?></strong><br>
            <strong>phasing: <?php echo $phasing ?></strong><br>
            <strong>config: <?php echo $config ?></strong><br>
            <strong>ground: <?php echo $ground ?></strong><br>
            <strong>condType: <?php echo $condType ?></strong><br>
            <strong>neuType: <?php echo $neuType ?></strong><br>
            <strong>DTrate: <?php echo $DTrate ?></strong><br>
            <strong>DTphase: <?php echo $DTphase ?></strong><br>
            <strong>DTbrand: <?php echo $DTbrand ?></strong><br>
            <strong>DTname: <?php echo $DTname ?></strong><br>
            <strong>EquipInst: <?php echo $EquipInst ?></strong><br>
            <strong>distFrom: <?php echo $distFrom ?></strong><br>
            <strong>kwhMeter: <?php echo $kwhMeter ?></strong><br>
            <strong>guy: <?php echo $guy ?></strong><br>
            <strong>date: <?php echo $date ?></strong><br>
            <strong>coorLat: <?php echo $coorLat ?></strong><br>
            <strong>coorLong: <?php echo $coorLong ?></strong><br>
            <strong>remark: <?php echo $remark ?></strong><br>
            <br>
            <a href = "pole.delete.php?id=<?php echo $id?>">
                <input type="submit" class="del" value="Delete Permanently">
            </a>
            <br>
            <br>
            <form action="admin.view.php" method="POST">
                <input type="submit" class="butt" value="Back to Admin">
            </form>
        </div>
    </div>
</body>