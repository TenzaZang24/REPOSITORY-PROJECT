<?php
// session_start();
// $username   = $_SESSION['username'];
// $password  = $_SESSION['password'];
?>

<head>
	<title>User Add Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
<?php
include "../login.connect.php";

$poleNum		       = $_POST['poleNum'];
$fromBus 	       = $_POST['fromBus'];
$toBus             =$_POST['toBus'];
$poleClass		   = $_POST['poleClass'];
$poleType        = $_POST['poleType'];
$lineType	       = $_POST['lineType'];
$consTypePri		       = $_POST['consTypePri'];
$consTypeSec	       = $_POST['consTypeSec'];
$phasing               =$_POST['phasing'];
$config		   = $_POST['config'];
$ground       = $_POST['ground'];
$condType      =$_POST['condType'];
$neuType	       = $_POST['neuType'];
$DTrate		       = $_POST['DTrate'];
$DTphase	       = $_POST['DTphase'];
$DTbrand		   = $_POST['DTbrand'];
$DTname            =$_POST['DTname'];
$EquipInst         =$_POST['EquipInst'];
$DTname       = $_POST['DTname'];
$distFrom     =$_POST['distFrom'];
$kwhMeter	       = $_POST['kwhMeter'];
$guy		       = $_POST['guy'];
$date		   = $_POST['date'];
$coorLat        = $_POST['coorLat'];
$coorLong	       = $_POST['coorLong'];
$remark             = $_POST['remark'];



    $sql = mysqli_query($conn,
        "INSERT INTO sijadata(
        poleNum,
        fromBus,
        toBus,
        poleClass,
        poleType,
        lineType,
        consTypePri,
        consTypeSec,
        phasing,
        config,
        ground,
        condType,
        neuType,
        DTrate,
        DTphase,
        DTbrand,
        DTname,
        EquipInst,
        distFrom,
        kwhMeter,
        guy,
        date,
        coorLat,
        coorLong,
        remark)
        VALUES (
'$poleNum',
'$fromBus',
'$toBus',
'$poleClass',
'$poleType',
'$lineType',
'$consTypePri',
'$consTypeSec',
'$phasing',
'$config',
'$ground',
'$condType',
'$neuType',
'$DTrate',
'$DTphase',
'$DTbrand',
'$DTname',
'$EquipInst',
'$distFrom',
'$kwhMeter',
'$guy',
'$date',
'$coorLat',
'$coorLong',
'$remark')");
    

    // TODO: Change below if statement from page to message box

        if($sql === true){
            
        }	else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

?>
<div class="bg-white border border-black p-4 rounded-4 bg-opacity-25 position-absolute top-50 start-50 translate-middle text-center shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1>Pole Information has been added successfully!</h1><br>
    <form action='../main/main.view.php' method='POST'>
    <input type='submit' value='Back to Login' class="butt">
    </form>
</div>


</body>