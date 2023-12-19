<?php
include "../login.connect.php";
session_start();

if($_SESSION['poleNum'] == null){
    header("Location:../login.view.php");
  }

$poleNum  = $_SESSION['poleNum'];



$poleNum = $_POST['poleNum'];
$fromBus         = $_POST['fromBus'];    
$toBus            = $_POST['toBus'];
$poleClass           = $_POST['poleClass'];
$poleType        = $_POST['poleType'];
$lineType =$_POST['lineType'];
$consTypePri          = $_POST['consTypePri'];    
$consTypeSec            = $_POST['consTypeSec'];
$phasing           = $_POST['phasing'];
$config        = $_POST['config'];
$ground = $_POST['ground'];
$condType          = $_POST['condType'];    
$neuType            = $_POST['neuType'];
$DTrate           = $_POST['DTrate'];
$DTphase        = $_POST['DTphase'];
$DTbrand = $_POST['DTbrand'];
$DTname          = $_POST['DTname'];    
$EquipInst            = $_POST['EquipInst'];
$distFrom           = $_POST['distFrom'];
$kwhMeter        = $_POST['kwhMeter'];
$guy = $_POST['guy'];
$date          = $_POST['date'];    
$coorLat            = $_POST['coorLat'];
$coorLong           = $_POST['coorLong'];
$remark        = $_POST['remark'];





$update = mysqli_query($conn, "UPDATE sijadata 
SET poleNum = '$poleNum',
fromBus = '$fromBus', 
toBus = '$toBus',
poleClass = '$poleClass', 
poleType = '$poleType',
lineType = '$lineType', 
consTypePri = '$consTypePri',
consTypeSec = '$consTypeSec', 
phasing = '$phasing',
config = '$config', 
ground = '$ground',
condType = '$condType',
neuType = '$neuType', 
DTrate = '$DTrate',
DTphase = '$DTphase', 
DTbrand = '$DTbrand',
DTname = '$DTname',
EquipInst = '$EquipInst', 
distFrom = '$distFrom',
kwhMeter = '$kwhMeter', 
guy = '$guy',
date = '$date',
coorLat = '$coorLat', 
coorLong = '$coorLong',
remark = '$remark'"
. "WHERE poleNum = '$poleNum'");

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